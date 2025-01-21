<?php
# öffnet die logfile.txt und gibt sie nach Schema aus
# (falls logfile.txt nicht da ist fopen_datenschutz.php ausführen, dort ist ein include der den log auslöst)
# trim weil das logfile.txt mit einem carriage return endet, welches auch als Zeile aufgefasst wird und sonst ein leeres Array erzeugt
$logfileAll = trim(file_get_contents('files/logfile.txt'));

$logfileArray = explode(PHP_EOL, $logfileAll);


foreach($logfileArray as $logPoint){
    # var_dump( $logPoint);
        $logPointarr = explode( '|',$logPoint);
    # var_dump($logPointarr);
    $logElem = "";
    foreach($logPointarr as $logPointarrelem){
        $logElem = $logElem." : ".$logPointarrelem;
        
    }
    echo $logElem."<br>";
}