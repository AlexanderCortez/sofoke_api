<?php
class DBsofoke extends ENV {
	private function __construct(){}

	private static function connection() {
		$env = new static();
		$db = $env->uriDB[$env->env]['sofoke'];
		$uri = $db['uri'];
		$user = $db['user'];
		$pwd = $db['pwd'];
		
		return new PDO($uri, $user, $pwd);
	}

	public static function query($sql, $params = []) {
		$statement = static::connection()->prepare($sql);
		$statement->execute($params);
    $result = $statement->fetchAll();
		return $result;
	}
}
?>