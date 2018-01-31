<?php

namespace App\Core;

//use App\Controllers\mainController;

class Router {

  protected $routes=[];

  public static function loadFile($fileName){
        $routers = new static;
        require $fileName;
        return $routers;
  }

  public function define($routes){
     $this->routes = $routes;
  }

  public function delegate($uri){
    if (array_key_exists($uri, $this->routes)) {
      return $this->callController(...explode('@', $this->routes[$uri]));
    }
    return "views/404.php";
  }

  protected function callController ($controller, $method){
    $controller = "App\\Controllers\\{$controller}";
    $controller = new $controller;
    if(! method_exists($controller, $method)){
      return "views/404.php";
    }
    return $controller->$method();

  }
}
