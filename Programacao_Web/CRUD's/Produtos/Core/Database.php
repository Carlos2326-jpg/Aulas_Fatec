<?php

class Database
{
  private $host;
  private $dbname;
  private $user;
  private $pass;
  private $conn;

  public function __construct()
  {
    $config = require __DIR__ . '/../config/database.php';
    $this->host = $config['host'];
    $this->dbname = $config['dbname'];
    $this->user = $config['user'];
    $this->pass = $config['pass'];
  }

  public function connect()
  {
    if ($this->conn === null) {
      try {
        $this->conn = new PDO(
          "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
          $this->user,
          $this->pass
        );

        $this->conn->setAttribute(
          PDO::ATTR_ERRMODE,
          PDO::ERRMODE_EXCEPTION
        );
      } catch (PDOException $e) {
        die('Erro na conexão com o banco de dados' . $e->getMessage());
      }
    }
    return $this->conn;
  }
}
