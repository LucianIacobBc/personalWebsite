<?php

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
          return $this->routes[$uri];
      }
      //throw new Exception('Seems you hit a dead end.');
  }
}
