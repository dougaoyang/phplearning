<?php

// $a = 10;
// print_r($GLOBALS);

// $b = 20;
// print_r($GLOBALS);

/*
$GLOBALS 存储的是全局可见的变量
*/

$GLOBALS['var1'] = 5;

$var2 = 1;

function get_value(){
    global $var1;
    global $var2;
    $GLOBALS['var1'] = 9;
    $var1 = 0;

    return $var2++;
}

echo get_value(),'<br />'; // 1

echo $var1,"<br />"; // 0
echo $var2; // 2


