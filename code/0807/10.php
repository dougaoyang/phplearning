<?php

/*
php的异常处理

throw关键字 抛出 Exception异常类
获取异常
try...catch
异常一定要被捕获,要被catch到

需要进行异常处理的代码应该放入 try 代码块内，以便捕获潜在的异常。
每个 try 或 throw 代码块必须至少拥有一个对应的 catch 代码块。
使用多个 catch 代码块可以捕获不同种类的异常。
可以在 try 代码块内的 catch 代码块中再次抛出（re-thrown）异常。
*/

function division ($a, $b) {

	if ($b == 0) {
		throw new Exception("除数不能为0", 10001);
		// echo '除数不能为0';
		// return 0;
	}
	return $a / $b;
}

try {
	echo division(20, 0);
	// 其他语句
} catch (Exception $e) {
	// print_r($e);
	// echo $e->getMessage(),"\r\n";
	// echo $e->getCode(),"\r\n";
	// echo $e->getFile(),"\r\n";
	// echo $e->getLine(),"\r\n";
	// print_r($e->getTrace());echo "\r\n";
	// echo $e->getTraceAsString(),"\r\n";
}

class HttpException extends Exception
{
	protected $httpStatus; // 404, 500, 403

	public function __construct ($message, $httpStatus) {
		$this->message = $message;
		$this->httpStatus = $httpStatus;
	}

	public function getHttpStatus () {
		return $this->httpStatus;
	}
}

class FileException extends Exception
{
}

try {
	try {
		// .....
		throw new HttpException('页面不存在', 404);
		// throw new Exception("系统异常", 10001);

	} catch (HttpException $e) {
		throw new FileException('文件打开错误');
		// if ($e instanceof Exception) {
		// 	echo "文件异常";
		// } else if ($e instanceof HttpException) {
		// 	echo "http异常";
		// } else {
		// 	echo "未知异常";
		// }
		// print_r($e);
		// echo $e->getMessage();
	}  catch (FileException $e) {
		print_r($e);
	}
} catch (FileException $e) {
	print_r($e);
}

// } catch (FileException $e) {
// 	throw new Exception("系统异常", 10001);
// } catch (Exception $e) {
// 	print_r($e);
// }


