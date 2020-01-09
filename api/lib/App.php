<?php
class App {
	function __construct() {
    try {
			$dir = App::parseUrl();
			$action = Router::getAction($dir);

			$controllerName = $action["controller"];
			$method = $action["method"];
			$base = $action["base"];

			require APP_PATH.$base."/controllers/".$controllerName.".php";

			$controller = new $controllerName();
			$controller->$method();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	private function parseUrl() {
		if (isset($_POST["url"])) {
			return $_POST["url"];	
		}
		if (isset($_GET["url"])) {
			return $_GET["url"];	
		}
		return "/";
	}
}
?>