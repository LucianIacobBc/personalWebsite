<?php


$result=require "core/bootstrap.php";
require "todolist.php";




require Router::loadFile('routes.php')->delegate(Request::uri());


$app ="Lucian Iacob Persoanl Website";

$titles = [
  "class Person{",
];
