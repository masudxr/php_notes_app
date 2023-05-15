<?php

// $serverName = "localhost";
// $userName ="root";
// $password="";
// $dbName = "instra";

// // create a connection
// $db = new mysqli('localhost', $username, $password);

//  if(!$db){
//  echo "sorry we failed to connect!";
//  exit();
//  }

//  echo "Connection was Successful";

class Database
{
   public $connection;
   public $statement;

   public function __construct($config, $username = 'root', $password = '')
   {
      $dsn = 'mysql:'. http_build_query($config, '', ';');

      $this->connection = new PDO($dsn, $username, $password, [
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
   }
   public function query($query, $params = [])
   {

      $this->statement = $this->connection->prepare($query);
      $this->statement->execute($params);

      return $this;
   }
   public function get() {
      return $this->statement->fetchAll();
   }

   public function find() {
      return $this->statement->fetch();
   }

   public function findOrFail()
   {
      $result = $this->find();

      if (! $result) {
         abort();
      }
      return $result;
   }
}
