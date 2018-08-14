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

	public function hello(Request $request)
	{
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
		return 'hi';
	}

}
