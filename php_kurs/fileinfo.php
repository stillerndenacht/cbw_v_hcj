<?php
echo "----------- Fileinfo -------------<br>";
function truefunction($wert)
{
    return $wert ? "TRUE<br>" : "FALSE<br>";
}
$file = '.';
$file = 'uploads';
$file = 'uploads/txt';
$file = 'uploads/txt/file_upload_testfile.txt';
$file = '..';
$file = '../php_kurs';

echo 'file_exists: ' . truefunction(file_exists($file));
echo "<br>";
// var_dump(pathinfo($file)); bringt nix auf die Punkte

$file = 'uploads/images/file_upload_testfile.jpg';
$file = 'uploads/';
if (file_exists($file)) {
    echo "<img src='$file'/>";
}
echo "<br>";
echo 'is_file: ' . truefunction(is_file($file));
echo "<br>";
echo 'is_dir: ' . truefunction(is_dir($file));

echo "<br>";
// hab ich Leserecht?? und kann man sie lesen
echo 'is_readable: ' . truefunction(is_readable($file));
echo "<br>";
// Schreibrecht?? beschreibbare Datei??
echo 'is_writeable: ' . truefunction(is_writeable($file));
echo "<br>";
// Ausführungsrecht?? und ausführbare Datei??
echo 'is_executable: ' . truefunction(is_executable($file));
echo "<br>";
// ist es eine Verknüpfung??
echo 'is_link: ' . truefunction(is_link($file));
echo "<br>";
echo 'is_uploaded_file: ' . truefunction(is_uploaded_file($file));
echo "<br>";
echo filesize($file) . " byte , oder :" . (filesize($file) / 1024) . " Kbyte , oder :" . (filesize($file) / 1024 / 1024) . " Gbyte <br>";

if(($size = @filesize($file)) !== false){
echo "Filesize ist: ".$size . " byte <br>";
}else{
    echo "Die Datei ".$file." gibt es nicht an dieser Stelle.";
}