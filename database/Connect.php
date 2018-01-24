<?php

class ConnectDB {
  public static function CreateDBConnection($config) {
    try {
      $db = new PDO($config['database']['dsn'].";"."dbname={$config['database']['dbname']}",
      $config['database']["dbusername"],   $config['database']["password"]);
      return $db;
    }
    catch(PDOException $e){
      die("Could not connect!");
    }
  }
}
