<?php
namespace App\Core;

use PDO;
use PDOException;

/*
单例
*/
class Mysql
{
	private static $instance;

	private $connect;

	public function getInstance()
	{
		if (self::$instance) {
			return self::$instance;
		} else {
			self::$instance = new self;
			return self::$instance;
		}
	}

	private function __construct()
	{
		$database = include_once BASE_PATH . '/data/config/database.php';

		$dsn = 'mysql:host='.$database['host'].';port='.$database['port'].';dbname='.$database['dbname'];
		try {
			$this->connect = new PDO($dsn, $database['user'], $database['password']);
			$this->connect->exec('set names '.$database['charset']);
		} catch (PDOException $e) {
			exit('数据库连接失败:'.$e->getMessage());
		} 
	}

	public function getConnect()
	{
		return $this->connect;
	}

	private function __clone() {}
}
