
<?php $seitentitel = 'Password-Hash' ?>
<?php
$starttime = microtime(true);
$pwd = 'geheim';
$pwdmd5hash = md5($pwd);

echo "md5 Hash:  ".$pwdmd5hash."<hr>";
# Ausgabe: e8636ea013e682faf61f56ce1cb1ab5c
# wobei bei jedem Durchlauf der gleiche Hash entsteht

$eingabe = 'geheim';
if(md5($eingabe)==$pwdmd5hash){
    echo "alles ok <br>";
}else{
    echo "Leider nix ok<br>";
}

#---------------------------------------------------
echo "<hr>Default ist immer der aktuell beste in PHP integrierte Algorithmus derzeit 2 hoch 10 mal durchgeführt<br>";

$pwdhashdef = password_hash($pwd, PASSWORD_DEFAULT);
echo "Default Hash:  ".$pwdhashdef."<hr>";
# Ausgabe:
# $2y$10$tuPJVEGCBL7jl6C7rFAIRe2rDnREOHbyBmN4SF.EzDFB4yEkwuH0u
# wobei mit jedem Durchlauf andere Hashes entstehen
# $xx$xx$.... der Anfang beschreibt den Algorithmus
# $2y$10$ 2y für den Algorithmus(bcrypt), 2 hoch 10 mal damit verschlüsselt

# der derzeitige Algorithmus ist bcrypt und 60 Zeichen lang
# da sich das aber ändern kann, soll für eine Länge von 255 geplant werden
#---------------------------------------------------
echo "<hr>Default mit Parameter Anzahl der Durchläufe 'cost'=>12 <br>";

$pwdhashdef12 = password_hash($pwd, PASSWORD_DEFAULT, ['cost' => 12]);
# empfohlen wird dass die Verschlüsselung ca. 0,35s dauert
# auf dem CBW-Rechner ist 12 da ein guter Wert
echo "Default Hash 12x:  ".$pwdhashdef12."<hr>";
# Ausgabe:  $2y$12$MRq9OdL2HMDHR4d4OQDvmO8u0BBBHQRyYpip1Mh1oQiOsEilCtuW2
#--------------------------------------------------
echo "<hr>Password verify <br>";

var_dump(password_verify('geheim', $pwdhashdef)); # bool(true)
var_dump(password_verify($eingabe, $pwdhashdef)); # bool(true)
var_dump(password_verify('geh heim', $pwdhashdef)); # bool(false)
var_dump(password_verify('geheim', $pwdhashdef12)); # bool(true)

#--------------------------------------------------
echo "<hr>Password info bzw. Algorithmus-Info <br>";
password_get_info($pwdhashdef12);
#--------------------------------------------------
echo "<hr>Password needs Rehash <br>";
# fragt ab ob der aktuelle hash dem Vergleichsalgorithmus entspricht
var_dump(password_needs_rehash($pwdhashdef, PASSWORD_DEFAULT)); # bool(false)
var_dump(password_needs_rehash($pwdhashdef, PASSWORD_DEFAULT, ['cost'=>11])); # bool(true)
var_dump(password_needs_rehash($pwdhashdef, PASSWORD_DEFAULT, ['cost'=>9]));
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
    
    <p style="background: yellow; text-align: right;">
    <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>
</body>

</html>