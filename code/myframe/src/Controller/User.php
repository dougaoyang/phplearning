<?php
namespace App\Controller;

use App\Model\User as UserModel;

class User
{
	public function info()
	{
		$userModel = new UserModel;
		$userModel->getUserInfo(1);

		echo "我是用户信息";
	}

	public function add()
	{
		echo "添加用户";
	}
}
