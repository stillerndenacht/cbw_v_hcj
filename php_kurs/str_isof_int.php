<?php
# diese Funktion prüft ob ein eingegebener String aus den Zahlen 0-9 besteht
# wenn ja return: true
# bei nein return: false
# Länge des Strings egal

# Alternative: strspn()  https://www.w3schools.com/php/func_string_strspn.asp
function str_isof_int($string)
{
    $notok = '';
    $strarr = str_split($string);
    $check = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    #var_dump($strarr);
    foreach ($strarr as $a) {
        var_dump($a);
        echo $a;
        if (!in_array($a, $check)) {
            $notok = 'notok';
        }
    }
    if ($notok == 'notok') {
        return false;
    } else {
        return true;
    }
}
var_dump(str_isof_int('1024g'));
