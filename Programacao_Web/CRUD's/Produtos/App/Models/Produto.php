<?php
class Produto
{
  private $conn;
  private $table = 'produtos';

  public function __construct($db)
  {
    $this->conn = $db;
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
    $query = "INSERT INTO {$this->table} (nome, descricao, preco, quantidade) 
                  VALUES (:nome, :descricao, :preco, :quantidade)";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(':nome', $dados['nome']);
    $stmt->bindParam(':descricao', $dados['descricao']);
    $stmt->bindParam(':preco', $dados['preco']);
    $stmt->bindParam(':quantidade', $dados['quantidade']);

    return $stmt->execute();
  }

  public function update($id, $dados)
  {
    $query = "UPDATE {$this->table} 
                  SET nome = :nome, 
                      descricao = :descricao, 
                      preco = :preco, 
                      quantidade = :quantidade 
                  WHERE id = :id";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $dados['nome']);
    $stmt->bindParam(':descricao', $dados['descricao']);
    $stmt->bindParam(':preco', $dados['preco']);
    $stmt->bindParam(':quantidade', $dados['quantidade']);

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
