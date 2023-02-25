<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'phil.roberts90@outlook.com';

// Set the email headers
$headers = "From: $name <$email>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send the email
mail($to, $subject, $message, $headers);

// Redirect the user to a thank-you page
header('Location: thank-you.html');
?>
