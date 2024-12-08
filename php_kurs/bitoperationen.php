<?php

$oktal = 0100;
$binaer = 0b100;
$hex = 0x100;

echo $oktal;
echo '<br>';
echo $binaer;
echo '<br>';
echo $hex;
echo '<br><br>';

$zahl = -1; # jede Zahl belegt 64 Bit
echo decbin($zahl); #die Binärzahl, wobei führende 0 nicht angezeigt werden
# -1 = 1111111111111111111111111111111111111111111111111111111111111111
echo '<br>';
# Flags kann man über den 0/1 Wert einzelner Bits in dieser Zahl setzen Bsp
# Bsp. Verwendung für das Error Reporting
echo decbin(E_ALL).'<br>';          # 111111111111111
echo decbin(E_WARNING).'<br>';      # 000000000000010
echo decbin(E_NOTICE).'<br>';       # 000000000001000
echo decbin(E_DEPRECATED).'<br>';   # 010000000000000

echo '<br>';
$x = 8;
$y = 2;

echo $x.' = '.decbin($x).'<br>';
echo $y.' = '.decbin($y).'<br>';

echo ($x & $y).'<br>'; 

echo ($x | $y).'<br>';

echo ($x ^ $y).'<br>';  
echo '<br>';
?>