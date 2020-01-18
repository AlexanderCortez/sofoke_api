<?php 
class SofokeController {
	public function main() {
    $result = array("ok" => true);
    Response::sendJSON($result);
  }
  public function fetch() {
    $sofoke = new SofokeModel();
    $result = $sofoke->getAll();
    Response::sendJSON($result);
	}
}
?>