<?php
class PostController {
  public function index() {
    $posts = Post::all();
    require_once('views/post/index.php');
  }

  public function show() {
    if (!isset($_GET['id']))
    return call('pages', 'error');

    $post = Post::find($_GET['id']);
    require_once('views/post/show.php');
  }
}
?>
