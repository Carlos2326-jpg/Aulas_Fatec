<?php
require_once __DIR__ . '/../Models/Cliente.php';
require_once __DIR__ . '/../../Core/Database.php';

class ClienteController
{
  private $clienteModel;

  public function __construct()
  {
    $database = new Database();
    $db = $database->connect();
    $this->clienteModel = new Cliente($db); // Corrigido: Cliente ao invés de Produto
  }

  public function index()
  {
    $clientes = $this->clienteModel->all(); // Corrigido: $clientes
    require_once __DIR__ . '/../Views/Cliente/index.php';
  }

  public function create()
  {
    require_once __DIR__ . '/../Views/Cliente/create.php';
  }

  public function store()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $dados = [
        'nomeCompleto' => $_POST['nomeCompleto'], // Corrigido: nomeCompleto
        'cpf' => $_POST['cpf'],
        'email' => $_POST['email']
      ];

      if ($this->clienteModel->create($dados)) { // Corrigido: sem $id
        header('Location: index.php?controller=cliente&action=index&success=1');
      } else {
        echo "Erro ao cadastrar cliente."; // Corrigido: cliente
      }
    }
  }

  public function edit()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $cliente = $this->clienteModel->find($id);
      require_once __DIR__ . '/../Views/Cliente/edit.php';
    }
  }

  public function update()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id = $_POST['id'];
      $dados = [
        'nomeCompleto' => $_POST['nomeCompleto'], // Corrigido: nomeCompleto
        'cpf' => $_POST['cpf'],
        'email' => $_POST['email']
      ];

      if ($this->clienteModel->update($id, $dados)) {
        header('Location: index.php?controller=cliente&action=index&success=2');
      } else {
        echo "Erro ao atualizar cliente."; // Corrigido: cliente
      }
    }
  }

  public function delete()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      if ($this->clienteModel->delete($id)) {
        header('Location: index.php?controller=cliente&action=index&success=3');
      } else {
        echo "Erro ao excluir cliente."; // Corrigido: cliente
      }
    }
  }
}
