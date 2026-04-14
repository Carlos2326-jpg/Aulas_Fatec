<?php
class Cliente
{
  private $conn;
  private $table;

  public function __construct($db)
  {
    $this->conn = $db;
    $this->table = 'client';
  }

  public function all()
  {
    $query = "SELECT * FROM {$this->table}";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function find($id)
  {
    $query = "SELECT * FROM {$this->table} WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function create($dados)
  {
    $query = "INSERT INTO {$this->table} (nomeCompleto, cpf, email) 
              VALUES (:nomeCompleto, :cpf, :email)";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(':nomeCompleto', $dados['nomeCompleto']);
    $stmt->bindParam(':cpf', $dados['cpf']);
    $stmt->bindParam(':email', $dados['email']);

    return $stmt->execute();
  }

  public function update($id, $dados)
  {
    $query = "UPDATE {$this->table} 
              SET nomeCompleto = :nomeCompleto, 
                  cpf = :cpf, 
                  email = :email, 
              WHERE id = :id";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nomeCompleto', $dados['nomeCompleto']);
    $stmt->bindParam(':cpf', $dados['cpf']);
    $stmt->bindParam(':email', $dados['email']);

    return $stmt->execute();
  }

  public function delete($id)
  {
    $query = "DELETE FROM {$this->table} WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id);

    return $stmt->execute();
  }
}
