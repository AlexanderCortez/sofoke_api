<?php 
class CookieController {
	public function main() {
    $result = array("ok" => true);
    Response::sendJSON($result);
  }
}
?>