<?php

// 创建长度为10的数组，数组中的元素为递增的奇数，首项为1.
// 2*x -1

$arr = [];
for ($i=1; $i <= 10; $i++) { 
	$arr[] = 2*$i - 1;
	// $j += 2;
	// $j = $j +2;
}

// print_r($arr);

// 求数组中最大数的下标.
/*$arr = [];
for ($i=0; $i < 10; $i++) { 
	$arr[] = rand(1, 10);
}
print_r($arr);

$max = max($arr);
echo "最大值 $max \r\n";
echo array_search($max, $arr);

print_r(array_keys($arr, $max));

foreach ($arr as $key => $value) {
	if ($value == $max) {
		// $key
	}
}
*/

// 计算数组中最大数和最小数的差
// $arr = [];
// for ($i=0; $i < 10; $i++) { 
// 	$arr[] = rand(1, 10);
// }
// print_r($arr);
// $max = max($arr);
// $min = min($arr);
// echo "最大值 $max \r\n";
// echo "最小值 $min \r\n";

// echo $max - $min;

// 将一个长度超过10的数组最后5项直接截取，不改变顺序变为前5项，如{1,2,3,4,5,6,7,8,9,10}变为{6,7,8,9,10,1,2,3,4,5}

$arr = [];
for ($i=1; $i <= 10; $i++) { 
	$arr[] = $i;
}

print_r($arr);

// 取出最后5项
// $tmp = array_slice($arr, -5);
// print_r($tmp);

$jiediao = array_splice($arr, -5);
print_r($jiediao);
print_r($arr);

$new = array_merge($jiediao, $arr);
print_r($new);
