<?php
namespace App\Core;

use App\Core\Mysql;

class Model
{
	protected $connect;

	public function __construct()
	{
		// 获取mysql的连接
		$mysql = Mysql::getInstance();
		$this->connect = $mysql->getConnect();
	}

	/*
		insert update delete
		返回影响的行数
	*/
	public function exec($sql)
	{
		return $this->connect->exec($sql);
	}

	// select
	public function queryAll($sql)
	{
		$result = $this->connect->query($sql);
		if (false === $result) {
			$errorInfo = $this->connect->errorInfo();
			exit('数据表查询错误:'.$errorInfo[2]);
		}

		return $result->fetchAll();
	}

	public function query($sql)
	{
		$result = $this->connect->query($sql);
		if (false === $result) {
			$errorInfo = $this->connect->errorInfo();
			exit('数据表查询错误:'.$errorInfo[2]);
		}

		return $result->fetch();
	}

}

