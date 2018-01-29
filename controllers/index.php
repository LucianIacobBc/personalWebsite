<?php

$classType="Person";

if(isset($_POST["className"])){
$PersonData=$result->querryAll($_POST["className"], $_POST["className"]);
$classType =$_POST["className"];
}
else{
$PersonData=$result->querryAll('person', "Person");
}


foreach ($PersonData[0] as $key => $value){
if(isset($key))
$alls[$key]=$result->querryWhere('member_type', 'MemberType', $key);
}

require "views/index.view.php";
