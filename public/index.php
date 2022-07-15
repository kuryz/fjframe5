<?php 
/*
Author: Frank-James

*/

require_once __DIR__.'/../vendor/autoload.php';

use app\core\Bootstrap;
use app\controllers\SiteController;

$app = new Bootstrap(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->run();