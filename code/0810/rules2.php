<?php
if (!defined('ROOT_PATH')) {
	define('ROOT_PATH', __DIR__);
}

return [
	'Foo\\Bar\\Cat' => ROOT_PATH . '/Foo/Bar/CatClass.php',
	'Foo\\Bar\\Dog' => ROOT_PATH . '/Foo/Bar/DogClass.php',
];
