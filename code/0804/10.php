<?php

$arr2 = [
	'number' => 234,
	'name' => '张三',
	'height' => 174,
	'grade' => '高二',
	'home' => '南京'
];

print_r($arr2);

// echo current($arr2), '<br>';
// next($arr2);
// echo current($arr2), '<br>';


/*for (;current($arr2);next($arr2)) { 
	echo key($arr2), '~', current($arr2), '<br>';
}

echo '再遍历一次<br>';

reset($arr2);
for (;current($arr2);next($arr2)) { 
	echo key($arr2), '~', current($arr2), '<br>';
}

reset($arr2);
*/

for ($flag=true;current($arr2);) { 
	echo key($arr2), '~', current($arr2), '<br>';
	if ($flag) {
		// 前进两个
		next($arr2);
		next($arr2);
		$flag = false;
	} else {
		// 后退一个
		prev($arr2);
		$flag = true;
	}
}
