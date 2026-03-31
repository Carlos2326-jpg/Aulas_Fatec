<?php 

class Client {
    private $conn;
    private $table;

    public function __construct($db)
    {
        $this->conn = $db;
        $this->table = 'client';
    }

    public function all() {}

    public function find() {}

    public function creat() {}

    public function update() {}

    public function delete  () {}
}