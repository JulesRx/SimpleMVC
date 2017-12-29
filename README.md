# SimpleMVC
Un template PHP pour commencer un nouveau projet avec l'architecture MVC. Ce template est adapté pour les novices en PHP.

## Documentation
### Structure de base
Les pages sont structurées de telle manière :
- 'index.php' appelle 'dao.php' qui contient les paramètres du projet, défini les variables 'controller' et 'action', puis appelle 'layout.php'.
- 'layout.php' représente la structure HTML de chaque page, c.a.d. la head de la page, le body, le footer. Puis appelle 'routes.php', ce qui donne le contenu de la page.
- 'routes.php' appelle les contrôleurs, qui renvoient les vues et renvoient les vues correspondantes.

### Ajouter un contrôleur
Pour ajouter un contrôleur, il faut créer un contrôleur dans le dossier controllers nommé 'nomducontoleur_controller.php', créer les vues associées dans le dossier views et indexer ce contrôleur dans 'routes.php'.
Par exemple, on veut créer un contrôleur afin d'afficher une liste d'utilisateurs, ainsi que leur détails. On va donc créer le contrôleur 'utilisateur_controlleur.php' :
```php
<?php
class UtilisateurController {
  public function index() { // Action de base du contrôleur

    require_once('views/utilisateur/index.php');
  }

  public function details() {

    require_once('views/utilisateur/details.php');
  }
}
?>
```
Après avoir créé notre contrôleur, il faut l'indexer dans 'routes.php'... :
```php
switch($controller) {
    case 'utilisateur':
    // On peut créer une classe utilisateur avec le contôleur
    require_once('models/dto/utilisateur.php');
    $controller = new UtilisateurController();
    break;
  }
```
... et indiquer ses différentes actions :
```php
$controllers = array(
  'utilisateur' => ['index', 'details']
);
```
Ensuite, il faut créer les vues associées à ce contrôleur, c.a.d. dans le dossier 'views/utilisateur', les vues 'index.php' et 'details.php'.

Il ne reste plus qu'a remplir les contrôleurs pour démarrer le projet. :sparkles: