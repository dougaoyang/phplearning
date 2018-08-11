<?php
/*
框架都是单入口,只支持从一个文件访问
框架包含的主体

面向对象的方式

路由处理
数据库操作(orm), 数据库连接, 数据表的处理
模板引擎
*/

include 'vendor/autoload.php';

// http://localhost/phplearning/code/0811/framework/index.php?c=user&a=info
if (!isset($_GET['c']) || !isset($_GET['a'])) {
	exit('路由错误');
}

$className = ucfirst(strtolower($_GET['c']));

// App\Controller\User
$controller = 'App\\Controller\\' . $className;
if (!class_exists($controller)) {
	exit('['.$controller.']控制器不存在');
}

$obj = new $controller;

// $obj->info();
$action = $_GET['a'];
if (!method_exists($obj, $action)) {
	exit('['.$controller.']中的方法['.$action.']不存在');
}

// $obj->$action();
call_user_func_array([$obj, $action], []);
