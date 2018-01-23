<?php


function connectToDB (){
    
}

function queryDB ($db) {
  $statement=$db -> prepare("select * from person");
  $statement -> execute();
  return $statement->fetchAll(PDO::FETCH_CLASS, "Person");
}
