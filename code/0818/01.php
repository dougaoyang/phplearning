<?php
session_start();
// 查询数据库判断用户和密码是否正确
if ($_POST['username']=='admin' && $_POST['password']=='admin') {
	echo '登录成功';
	$_SESSION['username'] = 'admin';
}

