<?php

use App\Core\Router;
use App\Core\Request;

require "vendor/autoload.php";
$result=require "core/bootstrap.php";


Router::loadFile('routes.php')->delegate(Request::uri());

$app ="Lucian Iacob Persoanl Website";
