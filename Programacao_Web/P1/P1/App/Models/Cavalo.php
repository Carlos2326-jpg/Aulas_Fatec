<?php

class Cavalos {
    private $conn;
    private $table;

    public function __construct($db) {
        $this->conn = $db;
        $this->table = 'cavalos';
    }

    public function all() {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fill($id) {
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id); 
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($dados) {
        $query = "INSERT INTO {$this->table} (cav_nome, cav_raca, cav_cor, cav_sexo)
                VALUES (:nome, :raca, :cor, :sexo)"; 
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':raca', $dados['raca']);
        $stmt->bindParam(':cor', $dados['cor']);
        $stmt->bindParam(':sexo', $dados['sexo']);

        return $stmt->execute();
    }

    public function update($id, $dados) {
        $query = "UPDATE {$this->table} 
                SET (cav_nome = :nome,
                cav_raca = :raca, 
                cav_cor = :cor, 
                cav_sexo = :sexo)
                WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':raca', $dados['raca']);
        $stmt->bindParam(':cor', $dados['cor']);
        $stmt->bindParam(':sexo', $dados['sexo']);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}