<?php
    include("inc/config.php");
    if($_GET["login"] == "1"){
        $email   = $_POST["email"];
        $kodeord = md5($_POST["kodeord"]);
        $tjekLogind = mysqli_query($link, "SELECT * FROM brugere WHERE email='" . $email . "' AND kodeord='" . $kodeord . "' LIMIT 1");
        $logindGyldig = mysqli_num_rows($tjekLogind);
        if($logindGyldig == 1){
            $_SESSION["loggedIn"] = "1";
            header("Location: index.php");
        } else {
            // Intet
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pernille Bernitt Sommer - Admin Log in</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id="loginPage">
        <?php
            if($_SESSION["loggedIn"] != 1){
            ?>
            <div class="loginContainer">
                <div class="loginForm">
                    <img src="../img/logo.png" width="100%">
                    <form class="formDesign" action="?login=1" method="POST">
                        <?php
                            if($_GET["login"] == "1"){
                                if($logindGyldig == 0){
                                    echo "<div class='forkertInfo'>E-mail or Password was incorrect!</div>";   
                                }
                            }
                        ?>
                        <input class="loginInput" type="email" name="email" placeholder="E-mail.." required>
                        <input class="loginInput" type="password" name="password" placeholder="Password.." required>
                        <input class="loginButton" type="submit" name="login" value="Log In">
                    </form>
                </div>
            </div>
            <?php
            } else {
                header("Location: index.php");
            }
        ?>
    </body>
</html>