<?php
/*
依赖注入
*/

class Mail
{
	public function send()
	{
		echo "发短信<br>";
	}
}

class User
{
	public $mail;

	public function register()
	{
		echo "注册<br>";
		$this->mail = new Mail();
	}

	public function send()
	{
		$this->mail->send();
	}
}

$user = new User;

$user->register();
$user->send();
