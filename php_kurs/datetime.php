<!-- Link zur Referenz-Seite der Kürzel https://www.php.net/manual/en/datetime.format.php -->
<?php
echo "<br>---------- time ---------<br>";
echo time() . "<br>"; # Real Time Clock RTC - Server-System-Zeit Ausg.: 1736239235
# Sekunden seit 01.01.1970 = Unix-Zeit
echo "<br>---------- microtime ---------<br>";
echo microtime() . "<br>"; # Ausg.: 0.43791800 1736239235
var_dump(microtime()); # Ausg.: string(21) "0.43792400 1736239235" 
echo "<br>";
echo microtime(true) . "<br>"; # Ausg.: 1736239235.4379
var_dump(microtime(true)); # Ausg.: float(1736239235.437927) 
echo "<br>";
echo "<br>---------- rechnen mit time ---------<br>";
# mit time() kann man rechnen:
echo time() + (60 * 60 * 24); # Jetzt plus 1Tag
echo "<br>";

echo "<br>---------- getDate ---------<br>";
var_dump(getDate());
# Ausg.: array(11) { 
# ["seconds"]=> int(10) 
# ["minutes"]=> int(16) 
# ["hours"]=> int(10) 
# ["mday"]=> int(7) 
# ["wday"]=> int(2) 
# ["mon"]=> int(1) 
# ["year"]=> int(2025) 
# ["yday"]=> int(6) # der wievielte Tag nach dem 01.01.(=0)
# ["weekday"]=> string(7) "Tuesday" 
# ["month"]=> string(7) "January" 
# [0]=> int(1736241370) } 
echo "<br>";
$date = getDate();
echo $date['mday'] . '.' . $date['mon'] . '.' . $date['year'] . ' ' . $date['hours'] . ':' . $date['minutes'];

echo "<br>";
$einTagPlus = time() + (60 * 60 * 24);
$date = getDate($einTagPlus);
echo $date['mday'] . '.' . $date['mon'] . '.' . $date['year'] . ' ' . $date['hours'] . ':' . $date['minutes'];

# Datum formatiert
echo date(""); # benutzt den aktuellen timestamp, wenn nicht anders angegeben
echo "<br>";
echo date("Y"); # Jahr 4 stellig
echo "<br>";
echo date("y"); # Jahr 2 stellig
echo "<br>";
echo date("M"); # Monat als String Kürzel
echo "<br>";
echo date("m"); # Monat als Number mit führender Null 01
echo "<br>";
echo date("d.m.Y"); # benutzt den aktuellen timestamp, wenn nicht anders angegeben
echo "<br>";
echo date("w , W"); # Tag der Woche , Woche des Jahres/ Kalenderwoche
echo "<br>";
echo date("d.M.Y H:i:s"); # 07.Jan.2025 10:57:08
echo "<br>";
echo date("d.M.Y H:i:s", $einTagPlus); # 08.Jan.2025 10:57:08
echo "<br>";

echo "<br>---------- DateTime ---------<br>";
$date = new DateTime();
var_dump($date);
# Ausg.:
# object(DateTime)#1 (3) { 
#               ["date"]=> string(26) "2025-01-07 11:46:15.607826" 
#               ["timezone_type"]=> int(3) 
#               ["timezone"]=> string(13) "Europe/Berlin" } 
echo "<br>";
echo $date->format("d.M.Y H:i:s");
echo "<br>";

$date2 = new DateTime("now");
echo $date2->format("d.M.Y H:i:s");
echo "<br>";

$date3 = new DateTime("yesterday");
echo $date3->format("d.M.Y H:i:s");
echo "<br>";

$date4 = new DateTime("02.oct.2021");
echo $date4->format("d.M.Y H:i:s");
echo "<br>";

# für Timestamps muss man ein @ voranstellen
$date5 = new DateTime("@0");
echo $date5->format("d.m.Y H:i:s");
echo "<br>";

$date6 = new DateTime("@1736245258");
echo $date6->format("d.m.Y H:i:s");
echo "<br>";

echo "<br>---------- mktime ---------<br>";
# erzeugen eines Timestamp für einen bestimmten Tag
#      mktime(hour, minute, second, month, day, year)  
$tag = mktime(0, 0, 0, 7, 23, 1970);
echo "<br>";
echo $tag;
echo "<br>";
echo date('w', $tag);
echo "<br>";

echo "<br>---------- checkdate ---------<br>";
# prüfen eines Datums auf validität
var_dump(checkdate(4, 30, 1990)); # bool(true)
echo "<br>";
var_dump(checkdate(4, 31, 1990)); # bool(false)

echo "<br>---------- deutsches Datum ---------<br>";
# die class MyDateTime erbt von DateTime - die function deDate() wandelt die Eingabe bei Objekterzeugung in ein Datum im Format 21.02.2025

class MyDateTime extends DateTime
{
    public function deDate()
    {
        $date = $this->format("d.m.Y");
        return $date;
    }
}
# Bsp. Eingabe eines Zeitstempels
# aber auch Datumsangaben (2025-12-23) oder tomorrow, yesterday etc. sind möglich s.o. default ist "now"
$deDate = new MyDateTime('@1740133322');
echo $deDate->deDate();

echo "<br>---------- irgendein formatiertes Datum auf Unixtime setzen ---------<br>";
echo (new DateTime("Wed, 26 Feb 2025 14:39:16 +0100"))->format("U");
