<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Replace 'your_email@example.com' with your actual email address
    $to = "arora.aryan2002@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";

    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Phone: $phone\n";
    $mailBody .= "Message:\n$message";

    // Send email
    $mailSuccess = mail($to, $subject, $mailBody, $headers);

    if ($mailSuccess) {
        // Return a success message to the JavaScript
        echo "success";
    } else {
        // Return an error message to the JavaScript
        echo "error";
    }
}
?>
