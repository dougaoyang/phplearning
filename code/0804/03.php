<?php

// 魔术引号

// print_r($_POST);
// var_dump(get_magic_quotes_gpc());exit;

if (!isset($_POST['username']) || empty($_POST['username'])) {
	exit('请输入用户名');
}

if (!isset($_POST['password']) || empty($_POST['password'])) {
	exit('请输入密码');
}

$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);

// 数据库查询,用户名密码是否正确;

$sql = 'select count(*) from user where username=\''.$username.'\' and password=\''.$password.'\';';

echo $sql;
