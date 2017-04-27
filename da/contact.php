<?php
    if(isset($_POST["contactKnap"])){
        $fullName = $_POST["fullName"];
        $email = $_POST["emailAddress"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        
        $fullMessage = "Fulde Navn: " . $fullName . "\n";
        $fullMessage .= "E-mail Adresse: " . $email . "\n";
        $fullMessage .= "Emne: " . $subject . "\n";
        $fullMessage .= "Besked: \n" . $message;
        
        mail("ismail@imanov.dk", "Ny kontakt forespørgsel", $fullMessage);
        
        header("Location: contact.html");
    }
?>