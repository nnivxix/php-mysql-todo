<?php
namespace Config {
  class Database 
  {
    static public function getConnection() : \PDO
    {
      $host = "localhost";
      $port= 3306;
      $database = "php_todo";
      $user = "hanasa";
      $pswd = "1";

      return $connection = new \PDO("mysql:host=$host:$port; dbname=$database;", $user, $pswd);
    }
  }
}