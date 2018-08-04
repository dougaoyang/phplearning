<?php
// 超级全局变量
// 在任何都可以调用的变量,全局都可见的
// $_POST, $_GET, $_REQUEST, $_SERVER, $_COOKIE, $_SESSION, $_ENV, $_FILES, $GLOBALS

/*
	超级全局变量是数组类型的变量
	$_SERVER 服务器端的信息
*/

// setcookie('name', 'jack');


/*session_start();
$_SESSION['name'] = 'jack';
var_dump($_SESSION);
*/

// $_ENV
var_dump($_ENV);
var_dump(getenv('ALLUSERSPROFILE'));


