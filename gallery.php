<?php
include("inc/config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pernille Bernitt Sommer - Gallery</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Galleri Plugin - Lightbox -->
        <link href="lightbox/src/css/lightbox.css" rel="stylesheet">
        <script src="lightbox/src/js/lightbox.js"></script>
    </head>
    <body>
        <div class="responsiveMenuContainer" id="responsiveMenuContainer" style="display: none;">
            <div class="responsiveMenuExit" id="responsiveMenuExit"><i class="fa fa-times"></i></div>
            <a href="index.php"><div class="responsiveMenuItem">FRONTPAGE</div></a>
            <a href="blog.php"><div class="responsiveMenuItem">BLOG</div></a>
            <a href="lecture.html"><div class="responsiveMenuItem">LECTURE</div></a>
            <a href="biography.html"><div class="responsiveMenuItem">BIOGRAPHY</div></a>
            <a href="mybook.html"><div class="responsiveMenuItem">MY BOOK</div></a>
            <a href="gallery.php"><div class="responsiveMenuItem active">GALLERY</div></a>
            <a href="contact.html"><div class="responsiveMenuItem">CONTACT</div></a>
            <a href="javascript:void(0);"><div class="responsiveMenuItemFlag"><a href="index.php"><img class="flag" src="img/en.png"></a>&nbsp;<a href="da"><img class="flag" src="img/da.png"></a></div></a>
        </div>
        <header id="header">
            <div class="content">
                <a class="logo" href="index.php"><img alt="Logo" class="logoImg" src="img/logo.png"></a>
                <a class="responsiveMenu" id="responsiveMenu"></a>
                <nav id="headerNavigation">
                    <a href="index.php">FRONTPAGE</a>
                    <a href="blog.php">BLOG</a>
                    <a href="lecture.html">LECTURE</a>
                    <a href="biography.html">BIOGRAPHY</a>
                    <a href="mybook.html">MY BOOK</a>
                    <a href="gallery.php" class="active">GALLERY</a>
                    <a href="contact.html">CONTACT</a>
                    <a class="languageMenu" href="javascript:void(0);" id="currentLanguage"><img src="img/en.png" class="flag"></a>
                    <div class="flagDropDown" id="flagDropDown">
                        <a class="chooseLanguage" href="gallery.php"><img src="img/en.png" class="flag"></a>
                        <a class="chooseLanguage" href="da/gallery.php"><img src="img/da.png" class="flag"></a>
                    </div>
                </nav>
            </div>
        </header>
        <div id="gallery">
            <ul>
                <?php
                $hentGalleri = mysqli_query($link, "SELECT * FROM gallery ORDER BY id DESC");
                while($row = mysqli_fetch_array($hentGalleri)){
                    $title = $row["title"];
                    $imgUrl = $row["imgUrl"];
                    $date = $row["date"];
                ?>
                <li>
                    <a href="img/gallery/<?php echo $imgUrl; ?>" data-lightbox="gallery" data-title="<?php echo $title; ?> - <?php echo $date; ?>"><div>
                        <h3><?php echo $title; ?></h3>
                        <h4><?php echo $date; ?></h4>
                        </div></a>
	                   <img src="img/gallery/<?php echo $imgUrl; ?>" alt="" />
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div id="footer">
            <p>&copy 2016 Pernille Bernitt Sommer</p>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>