<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
	protected $pk = 'id';
	protected $table = 'users';

	// 模型初始化
    protected static function init()
    {
        //TODO:初始化内容
    }

}

