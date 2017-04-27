<?php
    include("inc/config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pernille Bernitt Sommer - Forside</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="responsiveMenuContainer" id="responsiveMenuContainer" style="display: none;">
            <div class="responsiveMenuExit" id="responsiveMenuExit"><i class="fa fa-times"></i></div>
            <a href="index.php"><div class="responsiveMenuItem active">FORSIDE</div></a>
            <a href="blog.php"><div class="responsiveMenuItem">BLOG</div></a>
            <a href="lecture.html"><div class="responsiveMenuItem">FOREDRAG</div></a>
            <a href="biography.html"><div class="responsiveMenuItem">BIOGRAFI</div></a>
            <a href="mybook.html"><div class="responsiveMenuItem">MIN BOG</div></a>
            <a href="gallery.php"><div class="responsiveMenuItem">GALLERI</div></a>
            <a href="contact.html"><div class="responsiveMenuItem">KONTAKT</div></a>
            <div class="responsiveMenuItemFlag"><a href="../index.php"><img alt="English" class="flag" src="img/en.png"></a>&nbsp;<a href="index.php"><img alt="Dansk" class="flag" src="img/da.png"></a></div>
        </div>
        <header id="header">
            <div class="content">
                <a class="logo" href="index.php"><img alt="Logo" class="logoImg" src="img/logo.png"></a>
                <a class="responsiveMenu" id="responsiveMenu"></a>
                <nav id="headerNavigation">
                    <a href="index.php" class="active">FORSIDE</a>
                    <a href="blog.php">BLOG</a>
                    <a href="lecture.html">FOREDRAG</a>
                    <a href="biography.html">BIOGRAFI</a>
                    <a href="mybook.html">MIN BOG</a>
                    <a href="gallery.php">GALLERI</a>
                    <a href="contact.html">KONTAKT</a>
                    <a class="languageMenu" href="javascript:void(0);" id="currentLanguage"><img src="img/da.png" class="flag" alt="Sprog"></a>
                    <div class="flagDropDown" id="flagDropDown">
                        <a class="chooseLanguage" href="../index.php"><img src="img/en.png" class="flag" alt="Engelsk"></a>
                        <a class="chooseLanguage" href="index.php"><img src="img/da.png" class="flag" alt="Dansk"></a>
                    </div>
                </nav>
            </div>
        </header>
        <div id="slider">
            <div class="cta content">
                <h1>An observation must be followed by an action</h1>
                <p>Delectus illum corporis laundantium illo repudiandae et doloemque.</p>
                <a class="button" href="#">
                <span>Udforsk Siden</span>
                </a>
            </div>
        </div>
        <div class="content" id="senesteBlog">
            <article class="venstreSide">
                <h2><b>NYE</b>OPDATERINGER</h2>
                <p class="describeTekst">Verdenen ændrer sig hurtigt, det gør jeg også. Hold dig opdateret med mine blog indlæg.</p>
                <a class="button" href="blog.php">
                <span>SE ALLE BLOG INDLÆG</span>
                </a>
            </article>
            <?php
                $hentBlog = mysqli_query($link, "SELECT * FROM blog ORDER BY id DESC LIMIT 2");
                while($row = mysqli_fetch_array($hentBlog)){
                    $id = $row["id"];
                    $title = $row["title"];
                    $date = $row["date"];
                    $post = substr($row["post"], 0, 170);
                    $imgUrl = $row["imgUrl"];
            ?>
            <article>
                <img src="img/blog/<?php echo $imgUrl; ?>" class="blogBillede" alt="Blog Indlæg Billede">
                <span class="blogDato"><?php echo date("j. M, Y", strtotime($date)); ?> / Blog</span>
                <h4><?php echo $title; ?></h4>
                <p class="blogText"><?php echo $post; ?>...</p>
                <a class="button" href="blogPost.php?id=<?php echo $id; ?>">
                <span>LÆS INDLÆG</span>
                </a>
            </article>
            <?
                }
            ?>
        </div>
        <div id="footer">
            <p>&copy; 2016 Pernille Bernitt Sommer</p>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>