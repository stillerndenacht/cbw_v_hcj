<?php
include_once 'Blog.class.php';
$seitentitel = 'all Blogs - all Articles';
$blognames = (NULL !== (Blog::getBlognames())) ? Blog::getBlognames() : []; # oder leeres Array wenn nichts da ist?
var_dump($blognames);

// für jeden namen in blognames ein Feld im Dropdown zum Auswählen
// und dann bei Auswahl eine Ansicht aller Blog-Einträge laden
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Beschreibung der Seite ca. 150 Zeichen">
    <title><?php echo $seitentitel ?></title>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="blognames">Wählen Sie einen Blog aus</label>
        <select name="blognames" id="blognames">
            <?php foreach ($blognames as $blogname) {
                echo "<option value=" . $blogname . ">" . $blogname . "</option>";
            } ?>
        </select>
        <input type="submit">
    </form>
</body>

</html>