<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name_new'];
    $email= $_POST['email_new'];
    $number= $_POST['phone_new'];

    $to = "support@webhyte.com";
    $subject = "$name requested a call";
    $headers = "From: $email";

    $email_message = "name_new: $name\n";
    $email_message .= "phone_new: $number\n";
    $email_message .= "email_new: $email\n";


    $success = mail($to, $subject, $email_message, $headers);

    if ($success) {
        header("Location: index.php");
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} 
?>