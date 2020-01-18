<?php
class SofokeModel extends Model {
	protected $table = "sofoke2";
  protected $primaryKey = "id";
  protected $connection = "DBsofoke";

	public function getAll() {
		$result = static::fetchAll();
		return $result;
	}
}
?>