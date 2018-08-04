<?php

// 接收post的值
// print_r($_POST);

// 校验一下$_POST的值
if (!isset($_POST['title']) || empty($_POST['title'])) {
	exit('请输入文章标题');
}

if (!isset($_POST['content']) || empty($_POST['content'])) {
	exit('请输入文章内容');
}

setcookie('user', '小明');

$str = '文章标题是:'.$_POST['title']."\r\n".'文章内容是:'.$_POST['content'];

file_put_contents('./content.txt', $str);

$content = file_get_contents('./content.txt');

$content = htmlspecialchars($content);

echo nl2br($content);
