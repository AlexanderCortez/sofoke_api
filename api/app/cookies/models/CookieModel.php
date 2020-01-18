<?php
class CookieModel extends Model {
	protected $table = "sofoke3";
  protected $primaryKey = "id";
  protected $connection = "DBCookie";

	public function getAll() {
		$sql = "select * from ".$this->table." where estado = 'nuevo' or estado = 'new'";
		$result = static::query($sql);
		return $result;
	}
}
?>