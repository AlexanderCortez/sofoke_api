<?php 
class CookieConnect {
	protected $table;
	protected $primaryKey;

	//private function __construct(){}

	public static function find($value) {
		$model = new static();
		$sql = "select * from ".$model->table." where ".$model->primaryKey." = :value";
		$params = ["value" => $value];
		$result = DBCookie::query($sql, $params);

		return $result;
  }

  public static function insert($sql, $params) {
    $model = new static();
    $result = DBCookie::query($sql, $params);
    return $result;
  }

	public static function fetchAll() {
		$model = new static();
		$sql = "select * from ".$model->table;
		$result = DBCookie::query($sql);

		return $result;
	}

	public static function query($sql) {
		$result = DBCookie::query($sql);
		return $result;
	}
}
?>