<?php 
class Model {
	protected $table;
	protected $primaryKey;
	protected $connection;

	public static function find($value) {
		$model = new static();
		$sql = "select * from ".$model->table." where ".$model->primaryKey." = :value";
		$params = ["value" => $value];
		$result = $model->connection::query($sql, $params);

		return $result;
  }

  public static function insert($sql, $params) {
    $model = new static();
    $result = $model->connection::query($sql, $params);
    return $result;
  }

	public static function fetchAll() {
		$model = new static();
		$sql = "select * from ".$model->table;
		$result = $model->connection::query($sql);

		return $result;
	}

	public static function query($sql) {
		$result = $model->connection::query($sql);
		return $result;
	}
}
?>