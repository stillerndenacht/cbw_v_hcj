<?php
# wird includiert in namespace.php
namespace namespace2;

const CONSTANT = 'konstanze aus der include2';
function i_am(){
    echo "ich bin aus der include2 <br>";
    echo __FUNCTION__.'<br>';
}
i_am();