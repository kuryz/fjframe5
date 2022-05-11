<?php
namespace app\core;
/**
 * 
 */
class Bootstrap
{
	public static string $ROOT_DIR;
	public Router $router;
	public Request $request;
	public Response $response;
	public static Bootstrap $app;
	public function __construct($rootPath)
	{
		self::$ROOT_DIR = $rootPath;
		self::$app = $this;
		$this->request = new Request();
		$this->response = new Response();
		$this->router = new Router($this->request, $this->response);
	}

	public function run()
	{
		echo $this->router->resolve();
	}
}