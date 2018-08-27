<?php

interface IMail
{
	public function send();
}
class Email implements IMail
{
	public function send()
	{
		echo "发邮件<br>";
	}
}
class Smsmail implements IMail
{
	public function send()
	{
		echo "发短信<br>";
	}
}


class User
{
	public $mail;

	public function register(IMail $mailobj)
	{
		echo "注册<br>";
		$this->mail = $mailobj;
	}

	public function send()
	{
		$this->mail->send();
	}

}

$emailObj = new Email;
$smsObj = new Smsmail;

$user = new User;
$user->register($emailObj);
$user->send();
$user->register($smsObj);
$user->send();
