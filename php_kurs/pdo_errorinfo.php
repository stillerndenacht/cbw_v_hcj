<?php
# wenn die Exceptions nicht ausgewertet bzw. ausgegeben werden hilft errorinfo()

include 'includes/PDOConnect_freunde.inc.php';
$db->exec('USE FAGPHP');

echo "errorinfo()";

try{
    echo $db->exec('DELET FROMM freunde WHERE id= 1')
}
catch(PDOException $e){
# echo $e->getMessage();
}
var_dump($db->errorinfo());