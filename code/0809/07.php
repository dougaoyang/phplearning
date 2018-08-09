<?php
// 写入文件 r a+ a

$filePath = './test.txt';
$fh = fopen($filePath, 'a');

$res = fwrite($fh, '\r\nwangwu');
var_dump($res);