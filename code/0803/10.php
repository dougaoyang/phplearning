<?php
// $_POST, $_GET
/*
这两个变量是从哪里来的?
$_GET从地址栏获取, $_POST从表单提交 (请求获取到底)

$_GET ,从url ?后面的内容name=jack&age=18, 键就是数组的键,值就是数组的值
$_POST, 通过表单提交,获取到对应的键值对

$_REQUEST存储的是$_GET和$_POST合起来的内容
*/

print_r($_GET);
print_r($_POST);
print_r($_REQUEST);

/*
$_GET和$_POST的区别
$_GET从地址栏传过来,明文传输, $_POST,从表单提交,安全性高
$_GET传输的内容都是字符串, $_POST字符串,数字,数组都可以传输
$_GET内容长度一般是限制在2k以内,  $_POST受到服务器端的控制 post_max_size
文件上传只能用post的方式
*/

