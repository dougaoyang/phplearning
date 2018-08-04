<?php

// 常量的定义

// if (!defined('PI')) {
// 	define('PI', 3.14);
// }

define('PI', 3.14);

$banj = 10;

$zhouchang = 2 * PI * $banj;
$mianji = PI * $banj * $banj;

echo '周长是:', $zhouchang;
echo '<br>';
echo '面积是:', $mianji;

$tiji = (4/3) *PI * $banj * $banj * $banj ;

echo '<br>';
echo '体积是:', $tiji;



