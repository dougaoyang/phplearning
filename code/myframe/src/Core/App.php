<?php
namespace App\Core;

class App
{
	public $routes = [];

	public function __construct()
	{
	}

	public function route($pathInfo, $callable)
	{
		$this->routes[$pathInfo] = $callable;
	}

	public function run()
	{
		$pathInfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

		$controller = 'App\\Controller\\Home';
		$action = 'index';
		foreach ($this->routes as $route => $className) {
			if ($route == $pathInfo) {
				$tmp = explode(':', $className);
				$controller = $tmp[0];
				$action = $tmp[1];
				break;
			}
		}

		$obj = new $controller;
		call_user_func_array([$obj, $action], []);
	}
}
