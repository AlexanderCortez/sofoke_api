<?php
class SofokeModel extends Model {
	protected $table = "sofoke2";
  protected $primaryKey = "id";
  protected $connection = "DBsofoke";

	public function getAll() {
		$sql = "select * from ".$this->table." where estado = 'new'";
		$result = static::query($sql);
		return $result;
	}
}
?>