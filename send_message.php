<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "pavanmadhav1936@gmail.com"; // Your email address

$body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

$headers = "From: $email";

if(mail($to, $subject, $body, $headers)) {
    http_response_code(200); // OK
} else {
    http_response_code(500); // Internal Server Error
}
?>
