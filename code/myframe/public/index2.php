<?php

include '../vendor/autoload.php';

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH.'/src');

$app = new App\Core\App;

include BASE_PATH . '/data/routes2.php';

try {
	$app->run();
} catch (Exception $e) {
	echo $e->getMessage();
}
