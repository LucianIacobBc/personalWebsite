<?php

namespace App\Controllers;

use App\Core\App;

class mainController {
  public function index()
  {
    $className="Person";

    if(isset($_POST["className"])){
      $PersonData=App::get('database')->querryAll($_POST["className"], $_POST["className"]);
      $className =$_POST["className"];
    }
    else{
      $PersonData=App::get('database')->querryAll('person', "Person");
    }

    foreach ($PersonData[0] as $key => $value){
      if(isset($key))
      $alls[$key]=App::get('database')->querryWhere('member_type', 'MemberType', $key);
    }

    require "views/index.view.php";

  }
}
