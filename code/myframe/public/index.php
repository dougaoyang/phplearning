<?php

include '../vendor/autoload.php';

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH.'/src');

$app = new App\Core\App;

include BASE_PATH . '/data/routes.php';

$app->run();
