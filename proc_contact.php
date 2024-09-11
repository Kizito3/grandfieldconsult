<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$fname = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (!$fname || !$email || !$message) {
    $_SESSION['error_message'] = 'All fields are required';
    header('Location: contact.php');
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error_message'] = 'Invalid email address, please check the email you entered.';
    header('Location: contact.php');
    exit();
}
$content = 'Below are the details that were filled:' . "\n"
    . 'Firstname: ' . $fname . "\n"
    . 'Email: ' . $email . "\n"
    . 'Message: ' . $message . "\n";

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'mail.grandfieldconsult.com';  // Specify main SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'info@grandfieldconsult.com';  // SMTP username
    $mail->Password = 'grandfieldconsult';        // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption
    $mail->Port      = 587;

    //Recipients
    $mail->setFrom('noreply@grandfieldconsult.com', 'Mailer');
    $mail->addAddress('info@grandfieldconsult.com');     // Add a recipient

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Message from Contact Form';
    $mail->Body = $content;

    $mail->send();
    $_SESSION['success_message'] = 'Message sent successfully!';
} catch (Exception $e) {
    $_SESSION['error_message'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}


// $to = "yourreceivingemail@example.com"; // Receiving email
// $subject = 'Message from Contact Form';
// $headers = "From: Deesconceptlimited@gmail.com\r\n";
// $headers .= "Reply-To: " . $email . "\r\n";
// $headers .= "X-Mailer: PHP/" . phpversion();

// $content = 'Below are the details that were filled:' . "\n"
// . 'Firstname: ' . $fname . "\n"
// . 'Email: ' . $email . "\n"
// . 'Message: ' . $message . "\n";

// if (mail($to, $subject, $content, $headers)) {
// $_SESSION['success_message'] = 'Message sent, one of our representatives will get back to you soon!';
// } else {
// $_SESSION['error_message'] = 'Message could not be sent, please try again later.';
// }

header('Location: contact.php');
exit();
