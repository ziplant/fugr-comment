<?php

require './app/core/Controller.php';
require './app/core/db.php';

class App {
  protected $controller = 'home';
  protected $action = 'index';
  protected $params = [];

  public function __construct() {
    $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $routing = require('./app/config/routes.php');

    if (isset($routing[$route])) {
      $controller = $routing[$route][controller] . 'Controller';
      require "./app/controllers/$controller.php";

      $controller = new $controller();
      $action = $routing[$route]['action'];
      $controller->$action();
    } else {
      header('Location: /');
    }
  }
}