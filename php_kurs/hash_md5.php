<?php
echo "<br>---- md5 hash --<br>";
$hashmichText = "ich bin ein bisschen verhasht";
$hex = md5($hashmichText);
$md = "e10dd4eeadd0ba9d1c2165f8a8f16f9f";
echo $md . '<br>';
echo $hex . '<br>';
$hashmichText = "ich bin ein bisschen verhuscht";
$hex = md5($hashmichText);
echo $hex . '<br>';

echo "<br>---- md5 für Passwörter - ist aber leider nicht 100% sicher --<br>";
# weil es nicht sicher ist, dass es unmöglich ist, dass verschiedene Passwörter nicht doch gleiche Hashwerte ergeben
$pwd = md5('geheim');
echo $pwd . '<br>';;
var_dump(md5('geheim') == $pwd); # bool(true)

echo "<br>---- md5 Test für Zahlen --<br>";
$count = 100;
for ($i = 0; $i <= $count; $i++) {
    #echo "i = ".$i. "<br>";
    for ($j = 0; $j <= $count; $j++) {
        #echo " ".$j." ";
        if (md5($i) == md5($j) && !($i == $j)) {
            echo "für i = " . $i . " mit dem md5-Hash : " . md5($i) . "<br>" . "und j = " . $j . " mit dem md5-Hash : " . md5($j) . "<br> gilt der gleiche Hashwert<br>";
        }
    }
}
echo "<br> ---- Ende md5 Test ---<br>";