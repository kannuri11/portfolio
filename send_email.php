<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $email_subject = $_POST['email_subject'];
    $message = $_POST['message'];

    $to = "kannurisumanth11@gmail.com";
    $subject = "Contact Form Submission: " . $email_subject;
    $message_body = "
        Full Name: $full_name\n
        Email: $email\n
        Mobile Number: $mobile_number\n
        Message:\n$message
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.');</script>";
    }
}
?>

