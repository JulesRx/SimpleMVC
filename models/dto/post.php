<?php
class Post {
  private $id;
  private $title;
  private $author;
  private $content;

  public function __construct($id, $title, $author, $content) {
    $this->id = $id;
    $this->title = $title;
    $this->author = $author;
    $this->content = $content;
  }

  public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id = $id;
  }

  public function getTitle(){
    return $this->title;
  }
  public function setTitle($title){
    $this->title = $title;
  }

  public function getAuthor(){
    return $this->author;
  }
  public function setAuthor($author){
    $this->author = $author;
  }

  public function getContent(){
    return $this->content;
  }
  public function setContent($content){
    $this->content = $content;
  }


  public static function all() {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM post');

    foreach($req->fetchAll() as $post) {
      $list[] = new Post($post['id'], $post['title'], $post['author'], $post['content']);
    }

    return $list;
  }

  public static function find($id) {
    $db = Db::getInstance();
    $id = $id;
    $req = $db->prepare('SELECT * FROM post WHERE id = :id');
    $req->execute(array('id' => $id));
    $post = $req->fetch();

    return new Post($post['id'], $post['title'], $post['author'], $post['content']);
  }
}
?>
