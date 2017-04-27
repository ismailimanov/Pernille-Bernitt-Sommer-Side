<?php
    if(isset($_POST["contactKnap"])){
        $fullName = $_POST["fullName"];
        $email = $_POST["emailAddress"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        
        $fullMessage = "Full Name: " . $fullName . "\n";
        $fullMessage .= "Email Address: " . $email . "\n";
        $fullMessage .= "Subject: " . $subject . "\n";
        $fullMessage .= "Message: \n" . $message;
        
        mail("ismail@imanov.dk", "New contact inquiry", $fullMessage);
        
        header("Location: contact.html");
    }
?>