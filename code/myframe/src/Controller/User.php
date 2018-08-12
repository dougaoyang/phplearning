<?php
namespace App\Controller;

use App\Model\User as UserModel;

class User
{
	public function info()
	{
		$userModel = new UserModel;
		$user = $userModel->getUserInfo(1);

		include APP_PATH . '/views/user/info.php';
	}

	public function add()
	{
		echo "添加用户";
	}
}
