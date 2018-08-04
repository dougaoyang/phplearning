<?php
// 逻辑运算符
// and(&&) or(||) ! xor

// $a = true;
// $b = false;
// $c = true;
// $d = false;

// $res = $a && $b;
// var_dump($res);

// $res1 = $a || $b || $c;
// var_dump($res1);


// var_dump($a);
// var_dump(!$a);

// $res = true xor true;
// var_dump($res);

// 短路
$a = 10;
$b = 20;

if ($a && ++$b) {
	echo '前面', $a, '~', $b; // 10，
} else {
	echo '后面', $a, '~', $b;
}

