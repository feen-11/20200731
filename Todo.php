<?php

namespace MyApp;

class Todo{

  private $db;
  public function __construct(){
    try{
      $this->db = new \PDO(DSN, DB_USERNAME, DB_PASSWORD);
      $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }catch (\PDOException $e){
      echo $e->getMessage();
      exit;
    }
  }

  public function getAll(){
    $stmt = $this->db->query("select * from todos order by id desc");
    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }
}
?>
