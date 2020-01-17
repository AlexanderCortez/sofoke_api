<?php
class DBCookie {
	private function __construct(){}

	private static function connection() {
		return new PDO("mysql:host=127.0.0.1; dbname=appvideo_cookies; charset=utf8", "root", "gui");
	}

	public static function query($sql, $params = []) {
		$statement = static::connection()->prepare($sql);
		$statement->execute($params);
    $result = $statement->fetchAll();
		return $result;
	}
}
?>