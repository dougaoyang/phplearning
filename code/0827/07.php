<?php
/*
观察者模式
*/
// 被观察者 一个主题
interface ISubject
{
	// 注册观察者
	public function register(IObserver $obj);
	// 有变动时通知观察者
	public function notify();
}

// 观察者
interface IObserver
{
	public function watch();
}

class Subject implements ISubject
{
	private $observers = [];

	public function register(IObserver $obj)
	{
		$this->observers[] = $obj;
	}

	public function notify()
	{
		foreach ($this->observers as $observer) {
			$observer->watch();
		}
	}
}

class Observer1 implements IObserver
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function watch()
	{
		echo "我是观察者".$this->name."<br>";
	}
}

$zhangsan = new Observer1('张三');
$lisi = new Observer1('李四');
$liubei = new Observer1('刘备');

$subject = new Subject;
$subject->register($zhangsan);
$subject->register($lisi);
$subject->register($liubei);

// 通知所有观察者
$subject->notify();
// print_r($subject);
