<?php


$result=require "bootstrap.php";
require "todolist.php";



$PersonData=$result->querryAll('person', 'Person');

var_dump($PersonData);

$app ="Lucian Iacob Persoanl Website";

$titles = [
  "class Person{",
];



require "index.view.php";
