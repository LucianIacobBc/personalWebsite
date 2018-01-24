<?php

class QueryCreator {
  protected $db;
  public function __construct($db){
    $this -> db = $db;
  }
  public function querryAll($table, $className){
     $statement=$this -> db->prepare("select * from {$table}");
     $statement->execute();
     return $statement->fetchAll(PDO::FETCH_CLASS, $className);
  }
}
