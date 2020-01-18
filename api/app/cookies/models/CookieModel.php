<?php
class CookieModel extends Model {
	protected $table = "sofoke3";
  protected $primaryKey = "id";
  protected $connection = "DBCookie";

	public function getAll() {
		$result = static::fetchAll();
		return $result;
	}
}
?>