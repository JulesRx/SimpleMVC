<?php
function call($controller, $action) {
  // Autoload models
  $autoload = array('post');
  foreach ($autoload as $key => $value) {
    require('models/dto/'.$value.".php");
  }

  // Autoload Composer
  // require_once('vendor/autoload.php');

  // Autoload controllers
  require_once('controllers/' . $controller . '_controller.php');
  $class = ucfirst($controller) . "Controller";
  $controller = new $class();
  $controller->{ $action }();
}

// Declare controllers and actions
$controllers = array(
  'pages' => ['home', 'error', 'about'],
  'post' => ['index', 'show']
);

// If controller or action doesn't exist, redirect to error page
if (array_key_exists($controller, $controllers)) {
  if (in_array($action, $controllers[$controller])) {
    call($controller, $action);
  }
  else {
    call('pages', 'error');
  }
}
else {
  call('pages', 'error');
}
?>
