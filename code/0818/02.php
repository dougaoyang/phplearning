<?php
/*
会话技术
cookie
*/

date_default_timezone_set('Asia/Shanghai');

// echo date('Y-m-d H:i:s', time());
if (!isset($_COOKIE['counter'])) {
	$counter = 1;
} else {
	$counter = $_COOKIE['counter'];
}

echo "浏览量".$counter."次";

$counter = $counter + 1;
setcookie('counter', $counter, time()+100);
setcookie('name', 'zhangsan');
setcookie('age', 23);
