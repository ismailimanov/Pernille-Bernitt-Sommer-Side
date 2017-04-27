<?php
    include("header.php");
?>
<h1>Subscriptions</h1>
<h2>Manage your book subscriptions</h2>
<table class="blogPosts">
    <thead>
        <tr class="tabelOverskrifter">
            <th class="over-id">ID</th>
            <th class="over-pt">E-mail Address</th>
            <th class="over-dato">Date</th>
            <th class="over-actions">Actions</th>
        </tr>
    </thead>
    <?php
    $hentSub = mysqli_query($link, "SELECT * FROM subscribe ORDER BY id DESC");
    while($row = mysqli_fetch_array($hentSub)){
        $id = $row["id"];
        $email = $row["email"];
        $date = $row["date"];
    ?>
    <tr class="tabelRows">
        <td><?php echo $id; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $date; ?></td>
        <td class="actionsCol"><i class="fa fa-envelope" aria-hidden="true"></i></td>
    </tr>
    <?php
    }
    ?>
</table>
<?php
    include("footer.php");
?>