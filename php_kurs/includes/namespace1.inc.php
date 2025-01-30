<?php
# wird includiert in namespace.php
namespace namespace1;

const CONSTANT = 'konstanze aus der include';
function i_am(){
    echo "ich bin aus der include1 <br>";
    echo __FUNCTION__.'<br>';
    echo __NAMESPACE__.'<br>';
}
i_am();
echo "<hr>";

echo "<br>namespace1\i_am() aus namespace1 geht nicht...<br>";
# namespace1\i_am();
echo "<hr>";

echo "<br>\\namespace1\i_am() aus namespace1 geht...<br>";
\namespace1\i_am();
echo "<hr>";

# wenn man aber hier php default functions aufrufen will muss man es anders angeben
$date = new \DateTime();
echo $date->format("d.M.Y H:i:s")." aus namespace1<br>";
echo "<hr>";