<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Email address to receive the form submissions (your Gmail address)
    $to = 'dhanushm4422@gmail.com';

    // Subject of the email
    $subject = 'New Contact Form Submission';

    // Compose the email message
    $message_body = "Name: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";

    // Set additional headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email using Gmail's SMTP server
    if (mail($to, $subject, $message_body, $headers)) {
        // If mail sent successfully, redirect to success page
        header('Location: success.html');
    } else {
        // If unable to send mail, redirect to error page
        header('Location: error.html');
    }
}
?>
