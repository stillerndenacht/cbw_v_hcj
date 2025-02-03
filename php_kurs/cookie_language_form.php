<?php
$seitentitel = 'set Language cookie' ?>
<?php
var_dump($_COOKIE['lang']);
if (isset($_POST['lang'])) {
    echo $_POST['lang'];
    $lang = match ($_POST['lang']) {
        'en' => 'en',
        'de' => 'de',
        'fr' => 'fr',
        default => 'en',
    };

    setcookie('lang',$lang);
    header('Location:cookie_language_form.php');
}
$greet = 'Choose your language!';
if(isset($_COOKIE['lang'])){
    $greet = match ($_COOKIE['lang']) {
        'en' => 'Welcome ..',
        'de' => 'Tach auch..',
        'fr' => 'Bienvenue..',
        default => 'Choose your language!',
    };
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Beschreibung der Seite ca. 150 Zeichen">
    <title><?php echo $seitentitel ?></title>
    <style>

    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <!-- <form action="./first_formular_vorl.php" method="get"> -->
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="lang">Sprache auswählen : </label>
        <select name="lang" id="lang">
            <option value="en">english</option>
            <option value="de">deutsch</option>
            <option value="fr">français</option>
        </select>
        <input type="submit">
        <p><?= $greet ?></p>
    </form>
</body>

</html>