<?php

$app ="Lucian Iacob Persoanl Website";

$titles = [
  "My Bio",
];

$todoList = [
  ["name"=>"The Layout", "completed" => false],
  ["name"=>"Add Bio", "completed" => false],
  ["name"=>"Add Skill", "completed" => false],
  ["name"=>"Add Portofolio", "completed" => false],
  ["name"=>"Add Social Link", "completed" => false],
  ["name"=>"Add GitHub", "completed" => false],
  ["name"=>"Contact Page", "completed" => false],
  ["name"=>"Maybe some fancy shity quote?", "completed" => false]
];
$myPerson = [
  "name" => "Lucian Iacob",
  "age" => 31,
  "ocupation" => "Web developer"
];
require "index.view.php";
