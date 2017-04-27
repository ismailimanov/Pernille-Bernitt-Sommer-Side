<?php
include("inc/config.php");
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
            <a href="index.php"><div class="responsiveMenuItem">FRONTPAGE</div></a>
            <a href="blog.php"><div class="responsiveMenuItem active">BLOG</div></a>
            <a href="lecture.html"><div class="responsiveMenuItem">LECTURE</div></a>
            <a href="biography.html"><div class="responsiveMenuItem">BIOGRAPHY</div></a>
            <a href="mybook.html"><div class="responsiveMenuItem">MY BOOK</div></a>
            <a href="gallery.php"><div class="responsiveMenuItem">GALLERY</div></a>
            <a href="contact.html"><div class="responsiveMenuItem">CONTACT</div></a>
            <a href="javascript:void(0);"><div class="responsiveMenuItemFlag"><a href="index.php"><img class="flag" src="img/en.png"></a>&nbsp;<a href="da"><img class="flag" src="img/da.png"></a></div></a>
        </div>
        <header id="header">
            <div class="content">
                <a class="logo" href="index.php"><img alt="Logo" class="logoImg" src="img/logo.png"></a>
                <a class="responsiveMenu" id="responsiveMenu"></a>
                <nav id="headerNavigation">
                    <a href="index.php">FRONTPAGE</a>
                    <a href="blog.php" class="active">BLOG</a>
                    <a href="lecture.html">LECTURE</a>
                    <a href="biography.html">BIOGRAPHY</a>
                    <a href="mybook.html">MY BOOK</a>
                    <a href="gallery.php">GALLERY</a>
                    <a href="contact.html">CONTACT</a>
                    <a class="languageMenu" href="javascript:void(0);" id="currentLanguage"><img src="img/en.png" class="flag"></a>
                    <div class="flagDropDown" id="flagDropDown">
                        <a class="chooseLanguage" href="blog.php"><img src="img/en.png" class="flag"></a>
                        <a class="chooseLanguage" href="da/blog.php"><img src="img/da.png" class="flag"></a>
                    </div>
                </nav>
            </div>
        </header>
        <div class="content" id="senesteBlog" style="padding-bottom: 0;">
           <form action="" method="get" class="soegForm">
               <section class="search">
                   <label for="soeg"><i class="fa fa-search" aria-hidden="true"></i></label> 
                   <input type="text" class="soegInput" name="soeg" id="soeg" placeholder="Search..">
               </section>
           </form>
        </div>
        <div class="content" id="senesteBlog" style="padding-top: 0;">
            <?php
                if(isset($_GET["soeg"])){
                    $soegeOrd = $_GET["soeg"];
                    $i = 1;
                    $hentBlog = mysqli_query($link, "SELECT * FROM blog WHERE title LIKE '%" . $soegeOrd . "%' OR post LIKE '%" . $soegeOrd . "%' ORDER BY id DESC");
                    while($row = mysqli_fetch_array($hentBlog)){
                        $id = $row["id"];
                        $title = $row["title"];
                        $date = $row["date"];
                        $post = strip_tags(substr($row["post"], 0, 170));
                        $imgUrl = $row["imgUrl"];
                ?>
            <article>
                <img src="img/blog/<?php echo $imgUrl; ?>" style="box-sizing: border-box;" class="blogBillede">
                <span class="blogDato"><?php echo date("j. M, Y", strtotime($date)); ?> / Blog</span>
                <h4><?php echo $title; ?></h4>
                <p class="blogText"><?php echo $post; ?>...</p>
                <a class="button" href="blogPost.php?id=<?php echo $id; ?>">
                <span>Read Post</span>
                </a>
            </article>
                <?php
                            if($i%3 == 0) {
                            echo "</div>";
                            echo '<div class="content" id="senesteBlog">';
                        }
                        $i++;
                    }
                } else {
                    $i = 1;
                    $hentBlog = mysqli_query($link, "SELECT * FROM blog ORDER BY id DESC");
                    while($row = mysqli_fetch_array($hentBlog)){
                        $id = $row["id"];
                        $title = $row["title"];
                        $date = $row["date"];
                        $post = strip_tags(substr($row["post"], 0, 170));
                        $imgUrl = $row["imgUrl"];
            ?>
            <article>
                <img src="img/blog/<?php echo $imgUrl; ?>" style="box-sizing: border-box;" class="blogBillede">
                <span class="blogDato"><?php echo date("j. M, Y", strtotime($date)); ?> / Blog</span>
                <h4><?php echo $title; ?></h4>
                <p class="blogText"><?php echo $post; ?>...</p>
                <a class="button" href="blogPost.php?id=<?php echo $id; ?>">
                <span>Read Post</span>
                </a>
            </article>
            <?php
                        if($i%3 == 0) {
                            echo "</div>";
                            echo '<div class="content" id="senesteBlog">';
                        }
                        $i++;
                    }
                }
            ?>
        </div>
        <div id="footer">
            <p>&copy 2016 Pernille Bernitt Sommer</p>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>