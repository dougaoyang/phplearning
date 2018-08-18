<?php
session_start();

// session_unset 删除session内部的变量内容,不删除存放的文件
// session_destroy 删除存放的文件,内容不销毁

if (isset($_SESSION['name']) && $_SESSION['name']=='zhangsan') {
	echo '已经登录';
}

// print_r($_SESSION);
// // unset($_SESSION['name']);
// // session_unset();
// session_destroy();

// // $_SESSION['name'] = 123;
// print_r($_SESSION);

// unserialize(str)
