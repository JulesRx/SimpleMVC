<?php

class Db {

  private static $instance = NULL;

  public static function getInstance() {
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $base = 'simplemvc';
    if (!isset(self::$instance)) {
      $pdo_options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
      );
      self::$instance = new PDO('mysql:host='.$host.';dbname='.$base, $user, $pass, $pdo_options); //MariaDB
    }
    return self::$instance;
  }

  public function queryFetchAll($sql){
    $sth  =$this->query($sql);

    if ( $sth ){
      return $sth -> fetchAll(PDO::FETCH_ASSOC);
    }

    return false;
  }

  public function queryFetchFirstRow($sql){
    $sth    = $this->query($sql);
    $result    = array();

    if ( $sth ){
      $result  = $sth -> fetch();
    }

    return $result;
  }

  public function insert($sql){
    if ( $this -> exec($sql) > 0 ){
      return 1;
    }
    return false;
  }

  public function update($sql){
    return $this->exec($sql) ;
  }

  public function delete($sql){
    return $this->exec($sql) ;
  }

}

?>
