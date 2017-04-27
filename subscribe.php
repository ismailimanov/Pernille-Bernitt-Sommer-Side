<?php
include("inc/config.php");
    if(isset($_POST["subscribeButton"])){
        $email = $_POST["email"];
        $dato = date("d/m/y");
        mysqli_query($link, "INSERT INTO subscribe (email, date) VALUES ('" . $email . "', '" . $dato . "')");
        header("Location: mybook.html");
    }
?>