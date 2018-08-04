<?php

// 循环语句
// while do...while for

// $a = 10;
// while ($a>10) {
// 	echo $a, '<br>';
// 	$a = $a - 1;
// }
/*
 $a = 10;
 10 > 0 ?  true
 echo ...
 $a -1  ===> 9

 $a = 1
 $a - 1 ===> 0
*/

// $b = 10;
// do {
// 	echo $b, '<br>';
// 	$b = $b - 1;
// } while ($b > 10);

// for循环

// for ($a=10,$b=20; $a>0;$a = $a-1) {
// 	echo $a, '<br>';
// }


// $a = 10;
// for (;;) {
// 	if ($a <=0) {
// 		break;
// 	}
// 	echo $a, '<br>';
// 	$a=$a-1;
// }


// continue

$a = 10;
while ( $a > 0) {
	$a = $a - 1;
	if (5 == $a) {
		continue;
	}
	echo $a, '<br>';
}






