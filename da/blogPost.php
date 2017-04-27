<?php
include("inc/config.php");

if(!isset($_GET["id"])){
    header("Location: blog.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pernille Bernitt Sommer - Blog</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="responsiveMenuContainer" id="responsiveMenuContainer" style="display: none;">
            <div class="responsiveMenuExit" id="responsiveMenuExit"><i class="fa fa-times"></i></div>
            <a href="index.php"><div class="responsiveMenuItem">FORSIDE</div></a>
            <a href="blog.php"><div class="responsiveMenuItem active">BLOG</div></a>
            <a href="lecture.html"><div class="responsiveMenuItem">FOREDRAG</div></a>
            <a href="biography.html"><div class="responsiveMenuItem">BIOGRAFI</div></a>
            <a href="mybook.html"><div class="responsiveMenuItem">MIN BOG</div></a>
            <a href="gallery.php"><div class="responsiveMenuItem">GALLERI</div></a>
            <a href="contact.html"><div class="responsiveMenuItem">KONTAKT</div></a>
            <a href="javascript:void(0);"><div class="responsiveMenuItemFlag"><a href="../index.php"><img class="flag" src="img/en.png"></a>&nbsp;<a href="index.php"><img class="flag" src="img/da.png"></a></div></a>
        </div>
        <header id="header">
            <div class="content">
                <a class="logo" href="index.php"><img alt="Logo" class="logoImg" src="img/logo.png"></a>
                <a class="responsiveMenu" id="responsiveMenu"></a>
                <nav id="headerNavigation">
                    <a href="index.php">FORSIDE</a>
                    <a href="blog.php" class="active">BLOG</a>
                    <a href="lecture.html">FOREDRAG</a>
                    <a href="biography.html">BIOGRAFI</a>
                    <a href="mybook.html">MIN BOG</a>
                    <a href="gallery.php">GALLERI</a>
                    <a href="contact.html">KONTAKT</a>
                    <a class="languageMenu" href="javascript:void(0);" id="currentLanguage"><img src="img/da.png" class="flag"></a>
                    <div class="flagDropDown" id="flagDropDown">
                        <a class="chooseLanguage" href="../blog.php"><img src="img/en.png" class="flag"></a>
                        <a class="chooseLanguage" href="blog.php"><img src="img/da.png" class="flag"></a>
                    </div>
                </nav>
            </div>
        </header>
        <div class="content" id="senesteBlog">
            <?php
                $hentBlog = mysqli_query($link, "SELECT * FROM blog WHERE id='" . $_GET["id"] . "'");
                while($row = mysqli_fetch_array($hentBlog)){
                    $id = $row["id"];
                    $title = $row["title"];
                    $date = $row["date"];
                    $post = $row["post"];
                    $imgUrl = $row["imgUrl"];
                   
            ?>
            <article>
                <img src="img/blog/<?php echo $imgUrl; ?>" style="box-sizing: border-box;" class="blogBillede">
                <span class="blogDato"><?php echo date("j. M, Y", strtotime($date)); ?> / Blog</span>
                <h4><?php echo $title; ?></h4>
                <p class="blogText"><?php echo $post; ?></p>
            </article>
            <?php
                }
            ?>
        </div>
        <div id="footer">
            <p>&copy; 2016 Pernille Bernitt Sommer</p>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>