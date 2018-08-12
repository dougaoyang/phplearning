<?php
/*
路由
数据库orm

数据库的连接(更低一层)
数据库的增删改查操作
*/

include '../vendor/autoload.php';

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH.'/src');

$app = new \App\Core\App;

include BASE_PATH . '/data/routes.php';

$app->run();
