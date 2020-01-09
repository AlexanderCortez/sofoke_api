<?php
class Router {
	private static $routes = array();

	private function __construct() {}

	public static function add($route, $base, $controller, $method) {
		Router::$routes[$route] = array("base" => $base, "controller" => $controller, "method" => $method);
	}

	public static function getAction($route) {
		if (array_key_exists($route, static::$routes)) {
			return static::$routes[$route];
		} else {
			throw new Exception("Route not found");
		}
	}
}

?>