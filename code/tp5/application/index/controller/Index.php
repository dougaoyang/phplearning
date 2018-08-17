<?php
namespace app\index\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{

	protected function initialize()
    {
        // echo 'init<br/>';
    }

	public function index()
	{

	}

	public function hello(Request $request)
	{
		// $this->request;
		// var_dump($request->isPost());exit;
		// print_r($request);
		// $this->error('新增成功', 'news_info', ['id'=>1]);

		echo $url = url('news_info', ['id'=>1]);
		// $this->error('新增成功', $url);

		// $this->redirect($url);
		// $this->redirect('news_info', ['id'=>1]);
		// return 'hello';
		// return json(["id"=>1]);
		// return ['name'=>'thinkphp','status'=>1];

		$data = 'Hello,ThinkPHP!';
        return response($data, 403);
	}

	public function hi()
	{

		$this->assign('email','thinkphp@qq.com');
		$this->assign('arr', ['name' => 'zhang', 'age'=>30]);
		$this->assign('arr2', [
			'zhang' => ['age'=>23, 'name'=>'张三']
		]);
		$this->assign('html','<h1>我很大</h1>');
		$this->assign('a',10);
		$this->assign('b',20);
		$this->assign('id',20);

		$this->assign('list', [
			['name'=>'张三', 'age'=>23],
			['name'=>'李四', 'age'=>26],
			['name'=>'王五', 'age'=>28],
		]);
		return $this->fetch('index/hi',[
			'name' => 'hello',
		]);
	}

	public function extend()
	{
		return $this->fetch('index/extend');
	}

	public function extend2()
	{
		return $this->fetch('index/extend2');
	}

}
