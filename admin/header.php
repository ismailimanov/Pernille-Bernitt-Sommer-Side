<?php
include("inc/config.php");
if($_SESSION["loggedIn"] != 1){
    header("Location: login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en" id="adminPage">
    <head>
        <title>Pernille Bernitt Sommer - Admin Panel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/script.js"></script>
        <script src="tinymce/js/tinymce/tinymce.min.js"></script>
    </head>
    <body id="adminPage">
        <div class="wrapper">
            <div class="sidebar">
                <div class="title">
                    <img src="../img/logo.png" alt="Logo" class="adminLogo">
                </div>
                <ul class="nav">
                    <?php
                        $filNavn = basename(__FILE__, '.php');
                    ?>
                    <li>
                        <a href="index.php" <?php if($filNavn == "index"){ echo 'class="active"'; } ?>>Blog</a>
                    </li>
                    <li>
                        <a href="subscriptions.php" <?php if($filNavn == "subscriptions"){ echo 'class="active"'; } ?>>Subscriptions</a>
                    </li>
                    <li>
                        <a href="preorders.php" <?php if($filNavn == "preorders"){ echo 'class="active"'; } ?>>Preorders</a>
                    </li>
                    <li>
                        <a href="contact.php" <?php if($filNavn == "contact"){ echo 'class="active"'; } ?>>Contact</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="content isOpen">
                <a class="button"></a>
                <br>