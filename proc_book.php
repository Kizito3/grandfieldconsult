<?php
session_start(); // Start session at the beginning
include('conn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure you include this if using Composer

// Fetching and sanitizing form data
$fullname = mysqli_real_escape_string($conn, $_POST['full_name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$trip_type = mysqli_real_escape_string($conn, $_POST['trip_type']);
$from_location = mysqli_real_escape_string($conn, $_POST['from_location']);
$to_location = mysqli_real_escape_string($conn, $_POST['to_location']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$return_date = mysqli_real_escape_string($conn, $_POST['return_date']);
$number_of_travellers = mysqli_real_escape_string($conn, $_POST['number_of_travellers']);

// Validate required fields
if (!$trip_type || !$fullname || !$phone || !$from_location || !$to_location || !$date || !$return_date || !$number_of_travellers) {
    $_SESSION['error_message'] = 'All fields are required';
    header('Location: book.php');
    exit();
} else {
    // SQL query to insert data into the bookings table
    $query = "INSERT INTO bookings (trip_type, fullName, phone, from_where, to_where, moving_date, return_date, number_of_travellers) 
              VALUES ('$trip_type', '$fullname', '$phone', '$from_location', '$to_location', '$date', '$return_date', '$number_of_travellers')";

    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Prepare PHPMailer object
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();                                        // Set mailer to use SMTP
            $mail->Host       = 'mail.grandfieldconsult.com';                   // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                               // Enable SMTP authentication
            $mail->Username   = 'info@grandfieldconsult.com';             // SMTP username (Your email)
            $mail->Password   = 'grandfieldconsult';              // SMTP password (Your email password)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption
            $mail->Port      = 587;

            //Recipients
            $mail->setFrom('noreply@grandfieldconsult.com', 'Mailer');
            $mail->addAddress('info@grandfieldconsult.com');     // Add a recipient

            // Content
            $mail->isHTML(true);                                    // Set email format to HTML
            $mail->Subject = 'New Booking Received';
            $mail->Body    = "
            <p>Dear $fullname,</p>
            <p>Your booking has been confirmed with the following details:</p>
            <ul>
                <li>Trip Type: $trip_type</li>
                <li>From: $from_location</li>
                <li>To: $to_location</li>
                <li>Date: $date</li>
                <li>Return Date: $return_date</li>
                <li>Number of Travellers: $number_of_travellers</li>
            </ul>
            <p>Thank you for choosing our service.</p>
            <p>Regards,<br>Grand Field consult LTD</p>
            ";

            // Send email
            $mail->send();

            $_SESSION['success_message'] = 'Booking made and emails sent successfully!';
        } catch (Exception $e) {
            $_SESSION['error_message'] = 'Booking made, but email could not be sent. Error: ' . $mail->ErrorInfo;
        }

        header('Location: book.php');
        exit();
    } else {
        $_SESSION['error_message'] = 'Error: ' . mysqli_error($conn);
        header('Location: book.php');
        exit();
    }
}
