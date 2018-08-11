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

$route = new App\Core\Route;
$route->run();
