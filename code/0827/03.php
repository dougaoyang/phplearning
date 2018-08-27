<?php
// 工厂
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


interface ITransportFactory
{
	public function getTransport();
}
class CarFactory implements ITransportFactory
{
	public function getTransport()
	{
		return new Car;
	}
}
class TrainFactory implements ITransportFactory
{
	public function getTransport()
	{
		return new Train;
	}
}
class CarriageFactory implements ITransportFactory
{
	public function getTransport()
	{
		return new Carriage;
	}
}

$carFactory = new CarFactory;
$car = $carFactory->getTransport();
$car->go();

$carriageFactory = new CarriageFactory;
$carriage = $carriageFactory->getTransport();
$carriage->go();

