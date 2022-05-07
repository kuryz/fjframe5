<?php 
/*
Author: 

*/

require_once __DIR__.'/vendor/autoload.php';

use app\core\Bootstrap;


$app = new Bootstrap();

$app->router->get('/', function ($value='')
{
	return "hello world";
});

$app->run();