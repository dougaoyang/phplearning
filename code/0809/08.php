<?php

$str = file_get_contents('./test2.txt');
echo nl2br($str);
// filemtime 文件修改时间



// $res = file_put_contents('./test.txt', "hello world\r\n");
// $res = file_put_contents('./test2.txt', "zhangsan\r\n", FILE_APPEND);
// var_dump($res);

date_default_timezone_set('Asia/Shanghai');

echo date('Y-m-d H:i:s', filemtime('./test2.txt'));
echo "<br>";
echo date('Y-m-d H:i:s', filectime('./test2.txt'));
echo "<br>";
echo date('Y-m-d H:i:s', fileatime('./test2.txt'));


var_dump(is_readable('./test2.txt'));
var_dump(is_writable('./test2.txt'));

echo "<br>";
echo basename('d:/xampp/111/222/test.php', '.php');
echo "<br>";
echo dirname(dirname('d:/xampp/111/222/test.php'));

$arr = pathinfo('d:/xampp/111/222/test.php');
print_r($arr);
