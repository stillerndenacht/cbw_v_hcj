<?php
$longText = <<<'THOMA'
Seit 1878 lebte Thoma im 'Frankfurter "Westend"', Haus an Haus mit dem 
Malerfreund Wilhelm Steinhausen, und in gemeinsamem Haushalt mit 
seiner Ehefrau, seiner Schwester Agathe und mit Ella, 
der 1878 adoptierten Nichte seiner Frau.

Dort traf er unter anderem auf den in der Nachbarschaft 
(Mendelssohnstraße 69) lebenden SDAP-Politiker, Ex-Internatsdirektor 
und Privatgelehrten Samuel Spier und seine Frau, die Schriftstellerin 
und Kunstkritikerin Anna Spier. Die Spiers wie auch andere Bekannte 
Steinhausens unterstützten Thoma mit Aufträgen.

Anna Spier schrieb Artikel und ein Porträt in Buchform über ihn; 
Thoma schuf für sie ein Exlibris und malte ein Porträt, das sich heute 
im Germanischen Nationalmuseum in Nürnberg befindet.

Von <em>1886 bis 1899</em> lebte er in der <strong>Frankfurter</strong> 
Wolfsgangstraße 150 und von 1896 bis 1898 zugleich auch in Oberursel 
in der Taunusstraße 20 (heute Altkönigstr. 20). Inschriften an beiden 
Häusern weisen darauf hin. Während dieser Zeit entstand auch der 
Fries mit mythologischen Szenen im Palais Pringsheim in München. 
Zeitweise beherbergte er den Schriftsteller Julius Langbehn. 

Der Erbauer des Wohnhauses der Thomas, Simon Ravenstein, unterstützte 
Thoma mit zahlreichen Aufträgen, deren erster 1882 die Ausmalung des 
Hauses des Architekten selbst war.

Thoma stand den Malern der Kronberger Malerkolonie nahe. 
1899 bezog die vierköpfige Familie in Kronberg im Taunus eine Wohnung 
mit Atelier neben dem Friedrichshof, was Thoma als sichtbaren Ausdruck 
der lang ersehnten Anerkennung als Maler empfand.
THOMA;

$shortText = 'Das ist ein wirklich kurzer Text.';
#-----------------------------------------------------------
# im Buch Kapitel 7

echo $shortText[2]. '<br>'; # Ausgabe s
echo $shortText[-3]. '<br>'; # Ausgabe x

for ($i = 0; $i < strlen($shortText); $i++) {
    echo $shortText[$i] . '-';
}
echo '<br>';
echo "<br>---- chunk_split --<br>";
echo chunk_split($shortText, 5, '-|-') . '<br>'; # ($was , Steps, Einfügung)
echo substr(chunk_split($shortText, 5, '-|-'), 0, -strlen('-|-')) . '<br>';
# die letzte Einfügung wird wieder abgeschnitten

echo "<br>---- wordwrap --<br>";
# gemacht für Zeilenumbruch in Texten wordwrap(String , nach Anzahl Zeichen[default 75], mit [default \n] umbrechen, trennen im Wort [default false])

$wrap = wordwrap($shortText, 7, "<br>", false). '<br>';
echo $wrap;

echo "<br>---- strtok --<br>";
# liefert den String bis zum angegebenen Trennzeichen (nur Einzelzeichen )
echo strtok($shortText, " ") . "<br>"; 
echo strtok($shortText, "r") . "<br>";

// $exploder = explode(" ",$longText);
// var_dump($exploder); # das Ergebnis ist noch lange nicht gut (als Quelltext anzeigen) - Muss also weiter bearbeitet werden.
echo "<br> ---- explode ---<br>";
$exploder = explode(" ", $shortText);
var_dump($exploder); # das Ergebnis ist noch lange nicht gut (als Quelltext anzeigen) - Muss also weiter bearbeitet werden.
echo "<br> ---- implode/join ---<br>";
echo implode($exploder);
echo join($exploder);

echo "<br> ---- str_split ---<br>";
$strsplit = str_split($shortText, 5);
var_dump($strsplit);

echo "<br><br> ---- str_word_count ---<br><br>";
$strwordcount = str_word_count($shortText);
var_dump($strwordcount); # Ausgabe int(6)

$strangeText = "  Ich <br> ein .. komischer 
TEXT.TEXT? ?5 ? 5";

echo "<br><br> ---- str_word_count Modus 1 strip all außer Buchstaben ---<br><br>";
$strwordcount2 = str_word_count($strangeText, 1); # Modus 1 gibt ein Array der Wörter zurück (<br> kommt aber als Wort: "br" raus)
var_dump($strwordcount2);

echo "<br><br> ---- str_word_count Modus 2 strip all außer Buchstaben und gibt Startindex des Wortes---<br><br>";
$strwordcount3 = str_word_count($strangeText, 2); # Modus 2 gibt ein Array der Wörter zurück (<br> kommt aber als Wort: "br" raus)
var_dump($strwordcount3);

$strangeText2 = "  Ich <br> ein .. kömischer 
TEXT.TEXT? ?54 10' ? 5 der '  Ähh viele ÖÖhm weiße ÜÜs oder ühh übergibt";

echo "<br><br> ---- str_word_count Modus 2 strip all außer Buchstaben und gibt Startindex des Wortes , und Angabe von Zeichen die zusätzlich enthalten sein dürfen ---<br><br>";
$strwordcount4 = str_word_count($strangeText2, 2, 'äüößÄÖÜ0123456789<>'); # im dritten Parameter kann man Extrazeichen eingeben (weil Umlaute etc. werden aussortiert)
var_dump($strwordcount4);
$strwordcount4flip = array_flip($strwordcount4); # vertauscht key-value wodurch doppelte Worte nicht gezählt werden...
var_dump($strwordcount4flip); 

echo "<br><br> ---- strtolower/upper mb_strtolower/upper---<br><br>";
echo strtolower($strangeText2)."<br>"; # funktioniert nicht, wegen der Umlaute
echo mb_strtolower($strangeText2)."<br>"; # so geht es, wenn der Server so konfiguriert ist > php.ini > extension=mbstring
echo strtoupper($strangeText2)."<br>"; 
echo mb_strtoupper($strangeText2)."<br>"; #

echo "<br><br> ---- ucfirst ucwords---<br><br>";
echo ucfirst("apfel birne")."<br>"; # macht den ersten Buchstaben des Textes groß
echo ucfirst("äpfel öl")."<br>"; # funktioniert aber nicht bei Umlauten

echo ucwords($strangeText)."<br>"; # macht den ersten Buchstaben jedes Wortes groß
echo ucwords($strangeText2)."<br>"; # funktioniert aber nicht bei Umlauten

echo "<br><br> ---- substr ---<br><br>";
$strText = "abcd efgh ijkl mnop ABCD EFGH IJKL MNOP äöü ÄÖÜ";
echo substr($strText, -10 , 1)."<br>";

echo "<br><br> ---- strpos, stripos, strripos, mb_stripos---<br><br>";
echo strpos($strText, 'B', -2)."<br>"; # 
echo stripos($strText, 'B', -2)."<br>";

echo strripos($strText, 'K')."<br>";# sucht rückwärts case-in-sensitiv die Position
echo mb_stripos($strText, 'K')."<br>";

echo "<br><br> ---- strstr---<br><br>";
echo strstr('emailname@provider.de', '@')."<br>"; # Ausgabe : @provider.de
echo strstr('emailname@provider.de', '@', true)."<br>"; # Ausgabe : emailname

echo substr_count($strText,'B'); # zählt substrings

echo strpbrk($strText,'acB');

echo "<br><br> ---- parse_url---<br><br>";
var_dump(parse_url("https://username:pwdgeheim@www.google.de:8080/testungen/test.php?test=1#anker")); # zerlegt in alle Einzelteile die es so geben könnte

# metaphone(), levenstein(), similar_text(), soudex() - Ähnlichkeitsanalysen für english
