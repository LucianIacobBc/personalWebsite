<?php


$result=require "core/bootstrap.php";


require Router::loadFile('routes.php')->delegate(Request::uri());

$app ="Lucian Iacob Persoanl Website";
