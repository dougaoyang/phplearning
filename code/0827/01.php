<?php
/*
单例模式
*/

class Foo
{
	private static $ins;

	private function __construct()
	{
	}

	public static function getIns()
	{
		if (!self::$ins) {
			self::$ins = new self;
		}
		return self::$ins;
	}

	private function __clone()
	{
	}
}

$obj = Foo::getIns();

print_r($obj);
