<?php
namespace App\Model;

use App\Core\Model;

class User extends Model
{
	public $table = 'users';

	public function getUserInfo($id)
	{
		$sql = 'select * from users where id='.$id;
		$user = $this->query($sql);

		return $user;
	}

}

