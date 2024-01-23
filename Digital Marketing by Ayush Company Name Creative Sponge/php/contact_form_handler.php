<?php
if ($_SERVER["REQUEST_METHOD"] ==GET") {
    if (isset($_GET["email"])) {
        $email = $_GET["email"];

        // Recipient email address
        $to = $email;

        // Subject of the email
        $subject = "Response Received";

        // Message of the email
        $message = "Thank you for your response!";

        // Headers of the email
        $headers = "From: ayushkumar12030@gmail.com" . "\r\n" .
                   "Reply-To: ayushkumar12030@gmail.com" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Email sending failed.";
        }
    } else {
        echo "Email not provided.";
    }
} else {
    echo "Invalid request method.";
}
?>