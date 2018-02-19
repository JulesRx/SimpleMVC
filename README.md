# SimpleMVC
A PHP template to start a new project with the MVC architecture. This template is suitable for novices in PHP.

## Base structure
The pages are structured in such a way:
- `index.php` calls `dao.php` which contains the project parameters, sets the `controller` and `action` variables, and then calls `routes.php`.
- `routes.php` calls the controllers, which return the corresponding views, like the header, the page content and the footer.

## Add a controller
To add a controller, you need to create one in the controllers folder named `example_controller.php`, create the associated views in the `views/example/` folder, and index that controller in `routes.php`.
For example, we want to create a controller to display a list of users, as well as their details. We will create the controller `user_controller.php` :
```php
<?php
class UserController {
  public function index() { // Controller basic action

    require_once('views/template/header.php');
    require_once('views/user/index.php');
    require_once('views/template/footer.php');
  }

  public function details() {

    require_once('views/template/header.php');
    require_once('views/user/details.php');
    require_once('views/template/footer.php');
  }
}
?>
```
After creating our controller, we need to index it in `routes.php` ...:
```php
switch($controller) {
    case 'user':
    // You can create a user class along with the controller
    require_once('models/dto/user.php');
    $controller = new UserController();
    break;
}
```
... and indicate its different actions :
```php
$controllers = array(
  'user' => ['index', 'details']
);
```
Next, create the views associated with this controller, i.e. in the `views/user/` folder, the `index.php` and `details.php` views.

All that remains is to fill the controllers to start the project. :sparkles:
