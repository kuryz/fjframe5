<?php 
/*
Author: Frank-James

*/

require_once __DIR__.'/../vendor/autoload.php';

use app\core\Bootstrap;


$app = new Bootstrap(dirname(__DIR__));

$app->router->get('/', 'home');
$app->router->get('/contact', 'contact');
$app->router->post('/contact', function(){
	return 'handles submitted data';
});

$app->run();