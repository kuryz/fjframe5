<?php 

namespace app\controllers;

use app\core\Controller;

class SiteController extends Controller
{
	public function home($value='')
	{
		$params = [
			'name' => 'FjFrame 5'
		];
		return $this->view('home', $params);
	}

	public function contact($value='')
	{
		return $this->view('contact');
	}

	public function handleContact($value='')
	{
		return 'handling submitted data';
	}
}