<?php
include_once 'Blog.class.php';

$seitentitel = 'Create New Blog-Article';

$starttime = microtime(true);

# ------------------------------------------
$title = '';
$article = '';
$blog = '';
#$_POST = NULL;
var_dump($_POST);
if (isset($_POST)) {
    var_dump($_POST);
    $blog = new Blog($_POST['blog']);
    $blog->setBlogitem($_POST['title'], $_POST['article']);

    header($_SERVER["PHP_SELF"]);
}
#var_dump($blog);
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

        <label for="blog">Name des Blogs </label><br />
        <h2>
            <input type="text" name="blog" id="blog" value="" required />
        </h2>
        <label for="title">Titel des Blog Artikels </label><br />
        <h2>
            <input type="text" name="title" id="title" value="<?= $title ?>" required />
        </h2>

        <article>
            <label for="article">Freitext </label><br />
            <textarea name="article" id="article" cols="30" rows="10"><?= $article ?></textarea>
        </article>
        <input type="submit" value="Absenden" />
        <!-- <input type="submit" value="Löschen" /> -->
    </form>
    <footer style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </footer>
</body>

</html>