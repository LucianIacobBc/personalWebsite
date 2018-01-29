<?php

class QueryCreator {
  protected $db;
  public function __construct($db){
    $this -> db = $db;
  }
  public function querryAll($table, $className="Person"){
     $statement=$this -> db->prepare("select * from {$table}");
     $statement->execute();
     return $statement->fetchAll(PDO::FETCH_CLASS, $className);
  }
  public function querryWhere($table, $className="MemberType", $where_clause){
     $statement=$this -> db->prepare("select * from {$table} where name='$where_clause'");
     $statement->execute();
     return $statement->fetchAll(PDO::FETCH_CLASS, $className);
  }
}
