<?php 
class CookieController {
	public function main() {
    $result = array("ok" => true);
    Response::sendJSON($result);
  }
  public function fetch() {
    $cookie = new CookieModel();
    $result = $cookie->getAll();
    Response::sendJSON($result);
	}
}
?>