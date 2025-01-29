<?php
# wird includiert in namespace.php
namespace namespace1;

const CONSTANT = 'konstanze aus der include';
function i_am(){
    echo "ich bin aus der include1 <br>";
    echo __FUNCTION__.'<br>';
}
i_am();

echo "<br>namespace1\i_am() aus namespace1 geht nicht...<br>";
namespace\i_am();
echo "<br>\nnamespace1\i_am() aus namespace1 geht...<br>";
\namespace1\i_am();

# wenn man aber hier php default functions aufrufen will muss man es anders angeben
$date = new \DateTime();
echo $date;