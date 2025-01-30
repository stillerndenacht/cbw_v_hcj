<?php
# wird includiert in namespace.php
namespace namespace2;
include 'includes/namespace3.inc.php';


const CONSTANT = 'konstanze aus der include2';
function i_am(){
    echo "ich bin aus der include namespace2 <br>";
    echo __FUNCTION__.'<br>';
    echo __NAMESPACE__.'<br>';
}
i_am();

echo "<hr>";

echo "Aufruf von namespace3\i_am() aus der namespace2 <br>";
namespace3\i_am();
echo "<hr>";

echo "Aufruf von \\namespace2\\namespace3\i_am() aus der namespace2 <br>";
\namespace2\namespace3\i_am();
echo "<hr>";

