<?php

class db {
  protected $pdo;
  public function __construct() {
    $conn = require('./app/config/connection.php');
    $this->pdo = new PDO("mysql:host=$conn[host];dbname=$conn[db]", $conn['user'], $conn['password']);
  }
}

?>