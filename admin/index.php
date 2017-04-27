<?php
    include("header.php");
if(isset($_GET["slet"]))
    mysqli_query($link, "DELETE FROM blog WHERE id='" . $_GET["slet"] . "'");
?>
<h1 style="display: inline;">Blog</h1><a class="newLink" href="nyBlog.php"><div class="newButton">+ New</div></a>
<h2>Manage your blog content</h2>
<table class="blogPosts">
    <thead>
        <tr class="tabelOverskrifter">
            <th class="over-id">ID</th>
            <th class="over-pt">Post Title</th>
            <th class="over-dato">Date</th>
            <th class="over-actions">Actions</th>
        </tr>
    </thead>
    <?php
    $hentBlog = mysqli_query($link, "SELECT * FROM blog ORDER BY id DESC");
    while($row = mysqli_fetch_array($hentBlog)){
        $id = $row["id"];
        $title = $row["title"];
        $date = $row["date"];
    ?>
    <tr class="tabelRows">
        <td><?php echo $id; ?></td>
        <td><?php echo $title; ?></td>
        <td><?php echo $date; ?></td>
        <td class="actionsCol"><a href="?rediger=<?php echo $id; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="?slet=<?php echo $id; ?>"><i class="fa fa-times" aria-hidden="true"></i></a></td>
    </tr>
    <?php
    }
    ?>
</table>
<?php
    include("footer.php");
?>