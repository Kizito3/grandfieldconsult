<?php
session_start();
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


$to = 'info@grandfieldconsult.com';
$subject = 'Message from Grand Field Consult Contact Form';
$from = "from: noreply@grandfieldconsult.com";

$content = 'Below are the details that were filled:' . "\n"
    . 'Firstname: ' . $fname . "\n"
    . 'Email: ' . $email . "\n"
    . 'Message: ' . $message . "\n";

mail($to, $subject, $content, $from);

$_SESSION['success_message'] = 'Message sent successfully!';
header('Location: contact.php');
exit;
