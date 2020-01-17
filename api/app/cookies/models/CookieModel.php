<?php
class CookieModel extends CookieConnect {
	protected $table = "sofoke3";
  protected $primaryKey = "id";

	public function getAll() {
		$result = static::fetchAll();
		return $result;
	}
}
?>