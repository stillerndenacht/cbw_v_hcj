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

$service = $_GET['serv'] ?? '';

if ($service == "zufall") {
    $antwort = zufall();
} elseif ($service == "zitat") {
    $antwort = zitat();
} elseif ($service == "lotto") {
    $antwort = lotto();
} else {
    $antwort =  "Hier ist nix";
}

echo $antwort;

#--------- Aufruf in webserviceREST_use.php ----------

// $webservicecall = file_get_contents('http://localhost/hcj_cbw/php_kurs/webserviREST.php?serv= ');

// echo $webservicecall;