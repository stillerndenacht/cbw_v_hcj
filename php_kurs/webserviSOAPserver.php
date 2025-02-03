<?php
# der header hier ist für javascript, wenn die Server und Client auf verschiedenen Servern/Geräten laufen
header("Access-Control-Allow-Origin:*"); # CORS

function zufall()
{
    $rand = random_int(0, 1000);
    return $rand;
}

function zitat()
{
    $zitate = [
        "Logik bringt dich von A nach B. Deine Fantasie bringt dich überall hin.",
        "Jeder Fortschritt hat einen unscheinbaren Anfang!",
        "Wer allen gefallen will, der wird selten einem dienen."
    ];

    return $zitate[array_rand($zitate)];
}

function lotto(){
    $zahlen = [];
    while (sizeof($zahlen) <= 6){
        $zahl = rand(1,49);
        if (!in_array($zahl,$zahlen)){
            $zahlen[] = $zahl;
        }else{continue;}

    }
    return implode(" , ",$zahlen);
}
function rssnews(){
    $host = 'localhost';
$dbname = '';
$port = 3306;
$user = 'root';
$pw = '';

$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_PERSISTENT         => true
);

try {
    $dbrss = new PDO("mysql:host=$host; dbname=$dbname; port=$port", $user, $pw, $options);
    # var_dump($dbrss); # Ausgabe: object(PDO)#1 (0) { }
} catch (PDOException $e) {
    echo $e->getMessage();
    die("<br>Diese DB : $dbname existiert nicht");
}

$dbrss->exec('USE RSSDB');
$sql = 'SELECT channeltitle, title, description, pubdate FROM feeds ORDER BY RAND() LIMIT 1';
$statement = $dbrss->query($sql);

$feed = $statement->fetch();

$channeltitle = $feed['channeltitle'];
$title = $feed['title'];
$description = $feed['description'];
$pubdate = (new DateTime('@' . $feed['pubdate']))->format("d.M.Y H:i:s");

return "Feed von : $channeltitle <br> Titel : $title <br> Datum : $pubdate <br> Newstext : <br> $description <br>";
# return var_dump($feed); # nur für den Test wenn man diese Seite direkt aufruft

}
# echo rssnews(); # nur zum Test, macht das XML für den Client kaputt

$options = ['uri'=>'mysoapnamesp'];
$server = new SoapServer(null, $options);
$server->addFunction(['zufall','zitat','lotto', 'rssnews']);

$server->handle();

#--------- Aufruf in webserviceREST_use.php ----------

// $webservicecall = file_get_contents('http://localhost/hcj_cbw/php_kurs/webserviREST.php?serv= ... ');

// echo $webservicecall;