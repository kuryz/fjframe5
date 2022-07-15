<?php
namespace app\core;
/**
 * 
 */
class Router
{
	
	protected array $routes = [];
	public Request $request;
	public Response $response;

	/**
	 * @param \app\core\Request $request
	 * @param \app\core\Response $response
	*/

	public function __construct(Request $request, Response $response)
	{
		$this->request = $request;
		$this->response = $response;
	}

	public function get($path, $callback)
	{
		$this->routes['get'][$path] = $callback;
	}

	public function post($path, $callback)
	{
		$this->routes['post'][$path] = $callback;
	}

	public function resolve()
	{
		$path = $this->request->getPath();
		$method = $this->request->getMethod();
		$callback = $this->routes[$method][$path] ?? false;
		if ($callback === false) {
			$this->response->setStatusCode(404);
			return $this->renderView("404");
		}
		if(is_string($callback)){
			return $this->renderView($callback);
		}elseif (is_array($callback)) {
			$callback[0] = new $callback[0]();
		}
		return call_user_func($callback);
		/*echo "<pre>";
		var_dump($callback);
		echo "</pre>";*/
	}

	public function renderView($view='', $params=[])
	{
		$layoutContent = $this->layoutContent();
		$viewContent = $this->renderOnlyView($view, $params);
		return str_replace('{{content}}', $viewContent, $layoutContent);
	}

	public function renderContent($viewContent='')
	{
		$layoutContent = $this->layoutContent();
		return str_replace('{{content}}', $viewContent, $layoutContent);
	}

	protected function layoutContent($value='')
	{
		ob_start();
		include_once Bootstrap::$ROOT_DIR.'/views/layout/master.php';
		return ob_get_clean();
	}

	protected function renderOnlyView($view='', $params)
	{
		foreach($params as $key => $value):
			$$key = $value;
		endforeach;
		ob_start();
		include_once Bootstrap::$ROOT_DIR.'/views/'.$view.'.php';
		return ob_get_clean();
	}
}