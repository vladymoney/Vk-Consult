<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Set email variables
    $to = "vladynankov@gmail.com"; // Replace with the recipient email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nPhone: $phone\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        // Email sent successfully
        echo "Thank you! Your message has been sent.";
    } else {
        // Email sending failed
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>