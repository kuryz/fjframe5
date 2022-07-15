<?php 
namespace app\core;

use app\core\Bootstrap;

class Controller
{
	public function view($view, $params = [])
	{
		return Bootstrap::$app->router->renderView($view, $params);
	}
}