<?php
namespace App\Core;

class App
{
	public $getRoutes  = [];
	public $postRoutes = [];

	public $pathInfo   = '';

	public $controller = '';
	public $action = '';

	public function __construct()
	{
	}

	public function get($pathInfo, $callable)
	{
		// callable 'App\\Controller\\Home:index'
		$this->getRoutes[$pathInfo] = $this->parseCallable($callable);
	}

	public function post($pathInfo, $callable)
	{
		$this->postRoutes[$pathInfo] = $this->parseCallable($callable);
	}

	public function run()
	{
		$this->getCurrentPathinfo();
		$this->parseRoute();

		if (!class_exists($this->controller)) {
			exit('控制器不存在['. $this->controller .']');
		}

		if (!method_exists($this->controller, $this->action)) {
			exit('控制器['. $this->controller .']中的方法不存在['. $this->action .']');
		}

		$obj = new $this->controller;
		call_user_func_array([$obj, $this->action], []);
	}

	private function parseRoute()
	{
		$this->requestMethod = $_SERVER['REQUEST_METHOD'];

		$routes = [];
		if ($this->requestMethod == 'GET') {
			$routes = $this->getRoutes;
		} elseif ($this->requestMethod == 'POST') {
			$routes = $this->postRoutes;
		}

		foreach ($routes as $route => $callable) {
			if ($route == $this->pathInfo) {
				$this->controller = $callable['class'];
				$this->action = $callable['method'];
				break;
			}
		}
	}

	private function getCurrentPathinfo()
	{
		$this->pathInfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
	}

	private function parseCallable($callable)
	{
		$tmp = explode(':', $callable);
		return [
			'class' => $tmp[0],
			'method' => $tmp[1],
		];
	}

}
