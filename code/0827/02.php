<?php
/*
factory
简单工厂
工厂模式
抽象工厂
*/

class Foo
{
}

class FooFactory
{
	public static function createObj()
	{
		return new Foo;
	}
}

$obj = new Foo;
$obj1 = FooFactory::createObj();

// print_r($obj);
// print_r($obj1);


interface ITransport
{
	public function go();
}


class Carriage implements ITransport
{
	public function go()
	{
		echo "马车";
	}
}

class Train implements ITransport
{
	public function go()
	{
		echo "火车";
	}
}

class Car implements ITransport
{
	public function go()
	{
		echo "汽车";
	}
}

class TransportFactory
{
	public static function getTransport($name)
	{
		if ('carriage' == $name) {
			return new Carriage;
		} else if ('train' == $name) {
			return new Train;
		} else if ('car' == $name) {
			return new Car;
		}
	}
}


$car = TransportFactory::getTransport('car');
$train = TransportFactory::getTransport('train');

$car->go();
$train->go();

