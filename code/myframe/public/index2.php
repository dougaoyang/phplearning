<?php

include '../vendor/autoload.php';

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH.'/src');

$routes = [
	'/' => 'App\\Controller\\Home:index',
	'/user/info' => 'App\\Controller\\User:info',
];

$pathInfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

$controller = 'App\\Controller\\Home';
$action = 'index';
foreach ($routes as $route => $className) {
	if ($route == $pathInfo) {
		$tmp = explode(':', $className);
		$controller = $tmp[0];
		$action = $tmp[1];
		break;
	}
}

$obj = new $controller;
call_user_func_array([$obj, $action], []);
