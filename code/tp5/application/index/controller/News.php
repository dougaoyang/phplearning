<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;

class News extends Controller
{

	public function info($id)
	{
		// $res = \Db::name('users')->where('id','=',1)->select();
		// $res = User::where('id','=',1)->select();
		// $userModel = new User;
		// $res = $userModel->get(1);
		$res = User::get(1);
		echo $res->getLastSql(), '<br>';
		print_r($res);

		// return 'id为['.$id.']的新闻信息';
	}

	public function list()
	{
		// $name = 'zhang';
		// include
		$this->assign('age',23);
		return $this->fetch('news/mylist', ['id'=>123, 'name'=>'zhang']);
		/*return $this->display('{$name}-{$email}', [
            'name'  => 'ThinkPHP',
            'email' => 'thinkphp@qq.com'
        ]);*/
	}

}
