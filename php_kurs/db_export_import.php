<!-- damit das hier läuft muss pdo_dbthings_freunde.php über http://localhost/hcj_cbw/php_kurs/ aufgerufen werden. 
 Denn sonst gibt es die Datenbank nicht-->
<?php
include 'includes/PDOConnect_freunde.inc.php';
$db->exec('USE FAGPHP');
$sql = 'SELECT id, vorname, nachname, zeit FROM PDOFreunde ORDER BY id DESC';
$statement = $db->query($sql);

$freunde = $statement->fetchAll();
var_dump($freunde);

foreach ($freunde as $freund) {
    $nachname = $freund['nachname'];
    $vorname = $freund['vorname'];
    $zeit = $freund['zeit'];
    if ($freundeout = fopen('files/db_out.txt', 'ab')) {
        fwrite($freundeout, $nachname . '|' . $vorname . '|' . $zeit . PHP_EOL);
        fclose($freundeout);
    }
}

if ($db_outout = fopen('files/db_out.txt', 'rb')) {
    # var_dump($db_outout);
    
    while (!feof($db_outout)) {
        #echo fgets($db_outout);
        var_dump(trim(fgets($db_outout)));
    }
    fclose($db_outout);
}
