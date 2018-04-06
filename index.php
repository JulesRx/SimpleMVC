<?php
require_once('config/config.php');

require_once('models/dao.php');

if (isset($_GET['controller']) && isset($_GET['action'])) {
  $controller = $_GET['controller'];
  $action     = $_GET['action'];
}
else {
  $controller = 'pages';
  $action     = 'home';
}

require_once('config/routes.php');
?>
