<?php
class PagesController {
  public function home() {

    require_once('views/template/header.php');
    require_once('views/pages/home.php');
    require_once('views/template/footer.php');
  }

  public function about() {
    $title = "About";

    require_once('views/template/header.php');
    require_once('views/pages/about.php');
    require_once('views/template/footer.php');
  }

  public function error() {
    require_once('views/pages/error.php');
  }
}
?>
