<?php
    if(isset($_GET["visHjemmeside"])) {
// Dette er PHP delen, som faktisk er irrelevant for jer. Men her henter den database oplysningerne fra config filen, der er i inc mappen.
// Alle de steder på hjemmesiden hvor i kan se at der står < også et spørgsmålstegn betyder at det er en PHP kode der starter.
    include("inc/config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <!-- Head sektionen, hvor title, meta, stylesheet og JavaScript bliver hentet -->
    <head>
        <title>Pernille Bernitt Sommer - Frontpage</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Henter stylesheet for FontAwesome som er de små ikoner der bliver brugt omkring på siden (http://fontawesome.io/) -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Henter JavaScript pluginnet jQuery, som vi blandt andet bruger til vores responsive menu, så den kan lave en "fade in" effekt, når man trykker på for at åbne menuen (http://jquery.com/) -->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <!-- Denne linje kode gør så hjemmesiden bliver vist ordentligt på telefoner og tablets. Den går ind og ændre hvordan folk ser på hjemmesiden, ud fra den skærm bredde som selve enheden har. Så bredde = enhedens bredde -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- Dette er den responsive menu, som ikke bliver vist på hjemmesiden, medmindre man klikker på menu ikonet på mobil eller tablet. Derfor har den en inline style med display: none;, da du ikke kan have 2 forskellige display tags i den eksterne css, ind under en class. Altså den kan ikke både have display: block; og display: none; på samme class. -->
        <div class="responsiveMenuContainer" id="responsiveMenuContainer" style="display: none;">
            <div class="responsiveMenuExit" id="responsiveMenuExit"><i class="fa fa-times"></i></div>
            <a href="index.php"><div class="responsiveMenuItem active">FRONTPAGE</div></a>
            <a href="blog.php"><div class="responsiveMenuItem">BLOG</div></a>
            <a href="lecture.html"><div class="responsiveMenuItem">LECTURE</div></a>
            <a href="biography.html"><div class="responsiveMenuItem">BIOGRAPHY</div></a>
            <a href="mybook.html"><div class="responsiveMenuItem">MY BOOK</div></a>
            <a href="gallery.php"><div class="responsiveMenuItem">GALLERY</div></a>
            <a href="contact.html" class="responsiveMenuItemFlag"><div class="responsiveMenuItem">CONTACT</div></a>
            <!-- Dette er de 2 flag der kommer frem under mobil/tablet menuen, i bunden. -->
            <div class="responsiveMenuItemFlag"><a href="index.php"><img alt="English" class="flag" src="img/en.png"></a>&nbsp;<a href="da"><img alt="Danish" class="flag" src="img/da.png"></a></div>
        </div>
        <!-- Dette er hele headeren, med logo og menu -->
        <header id="header">
            <!-- Vi åbner en ny div inde i headeren fordi headeren har en width der er 100%, men fordi indholdet ikke skal være klistret ud til siderne, har vi lavet en ny div med class content, for at give den en fast bredde. -->
            <div class="content">
                <!-- Dette er logo billedet, med et link, så den går over til forsiden hvis man trykker på det -->
                <a class="logo" href="index.php"><img alt="Logo" class="logoImg" src="img/logo.png"></a>
                <!-- Dette er Menu knappen, der først bliver vist hvis enheden er en tablet eller mobil. Kan findes på style.css under class responsiveMenu. -->
                <a class="responsiveMenu" id="responsiveMenu"></a>
                <!-- Dette er hjemmesidens navigation. Vi kunne ligeså godt bruge en div istedet for nav, men der er blevet brugt nav for en at have et bedre overblik over hjemmesiden -->
                <nav id="headerNavigation">
                    <a href="index.php" class="active">FRONTPAGE</a>
                    <a href="blog.php">BLOG</a>
                    <a href="lecture.html">LECTURE</a>
                    <a href="biography.html">BIOGRAPHY</a>
                    <a href="mybook.html">MY BOOK</a>
                    <a href="gallery.php">GALLERY</a>
                    <a href="contact.html">CONTACT</a>
                    <!-- Dette er dropdown med flagene, hvor den viser det aktuelle sprog, også en dropdown med begge sprog som man kan vælge ud fra. -->
                    <a class="languageMenu" href="javascript:void(0);" id="currentLanguage"><img src="img/en.png" class="flag" alt="Current Language"></a>
                    <div class="flagDropDown" id="flagDropDown">
                        <a class="chooseLanguage" href="index.php"><img src="img/en.png" class="flag" alt="English"></a>
                        <a class="chooseLanguage" href="da/index.php"><img src="img/da.png" class="flag" alt="Danish"></a>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Dette er billedet der kommer oppe i toppen på forsiden, med tekst og knap som indhold -->
        <div id="slider">
            <div class="cta content">
                <h1>An observation must be followed by an action</h1>
                <p>Delectus illum corporis laundantium illo repudiandae et doloemque.</p>
                <a class="button" href="#">
                    <span>Explore the site</span>
                </a>
            </div>
        </div>
        <!-- Fra her af starter selve indholdet af hjemmesiden -->
        <!-- Igen bruger vi en div med class container, fordi vi ikke gider have at selve indholdet bliver klistret op venstre og højre side, og fordi den skal have samme bredde som der er i headeren. -->
        <div class="content" id="senesteBlog">
            <article class="venstreSide">
                <h2><b>NEW</b>Updates</h2>
                <p class="describeTekst">The world is changing fast, so am I. Keep informed with my latest blog posts.</p>
                <a class="button" href="blog.php">
                <span>VIEW ALL BLOG POSTS</span>
                </a>
            </article>
            <?php
            // Dette er en PHP del, hvor den går ind i databasen, og henter alt data fra databasen blog, og sortere den efter id, med en limit på 2, så den kun henter 2 blog opslag.
                $hentBlog = mysqli_query($link, "SELECT * FROM blog ORDER BY id DESC LIMIT 2");
                while($row = mysqli_fetch_array($hentBlog)){
                    $id = $row["id"];
                    $title = $row["title"];
                    $date = $row["date"];
                    $post = substr($row["post"], 0, 170);
                    $imgUrl = $row["imgUrl"];
            ?>
            <article>
                <img alt="Blog Post Image" src="img/blog/<?php echo $imgUrl; ?>" class="blogBillede">
                <span class="blogDato"><?php echo date("j. M, Y", strtotime($date)); ?> / Blog</span>
                <h4><?php echo $title; ?></h4>
                <p class="blogText"><?php echo $post; ?>...</p>
                <a class="button" href="blogPost.php?id=<?php echo $id; ?>">
                <span>Read Post</span>
                </a>
            </article>
            <?
                }
            ?>
        </div>
        <!-- Her starter footeren. Igen, vi kunne have brugt footer istedet for en div, det ville være det samme. -->
        <div id="footer">
            <p>&copy; 2016 Pernille Bernitt Sommer</p>
        </div>
        
        <!-- Her henter vi en ekstern JavaScript fil, som har alle de forskellige funktioner der sker på siden. F.eks. når man klikker på menu ikonet fra en mobil eller tablet, eller når man trykker på knappet i billedet oppe i toppen på forsiden, at den skal scrolle ned og at når man trykker på Åbn Teaser knappen, at den så åbner bogen op. -->
        <script src="js/script.js"></script>
    </body>
</html>
<?php
    } else {
        echo "<center><b>This website is now offline with request from Pernille Bernitt Sommer, who threatened with taking legal actions against us students.</b></center>";
    }
?>