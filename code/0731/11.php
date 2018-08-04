<?php

// 顺序结构
// echo '起床了';
// echo '穿衣服';
// echo '刷牙洗脸';

// if分支
// $time = 8.5;
// if ($time < 7) {
// 	echo '接着睡';
// } else if ($time < 8) {
// 	echo '起来洗脸';
// } else {
// 	echo '出门';
// }

// switch分支
$time = 7;

switch ($time) {
	case 7:
		echo '接着睡';

	case 8:
		echo '起来洗脸';

	default:
		echo '出门';
}



