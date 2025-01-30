<?php
# wird includiert in namespace2.php
namespace namespace2\namespace3;

const CONSTANT = 'konstanze aus der include3';
function i_am(){
    echo "ich bin aus der include namespace3 <br>";
    echo __FUNCTION__.'<br>';
    echo __NAMESPACE__.'<br>';
}

i_am();
echo "<hr>";

echo "Aufruf von \i_am() aus der namespace3 <br>";
\i_am();
echo "<hr>";

echo "Aufruf von \\namespace1\i_am() aus der namespace3 <br>";
\namespace1\i_am();
echo "<hr>";
