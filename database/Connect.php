<?php

class ConnectDB {
  public static function CreateDBConnection() {
    try {
      $db = new PDO('mysql:host=localhost;dbname=lucian_personal_website', "root", "");
      return $db;
    }
    catch(PDOException $e){
      die("Could not connect!");
    }
  }
}
