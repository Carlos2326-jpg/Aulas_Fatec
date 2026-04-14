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
    $this->clienteModel = new Cliente($db);
  }

  public function index()
  {
    $produtos = $this->clienteModel->all();
    require_once __DIR__ . '/../Views/Clientes/index.php';
  }

  public function create()
  {
    require_once __DIR__ . '/../Views/Clientes/create.php';
  }

  public function store()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $dados = [
        'nomeCompleto' => $_POST['nomeCompleto'],
        'cpf' => $_POST['cpf'],
        'email' => $_POST['email'],
      ];

      if ($this->clienteModel->create($dados)) {
        header('Location: index.php?action=index&success=1');
      } else {
        echo "Erro ao cadastrar produto.";
      }
    }
  }

  public function edit()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $produto = $this->clienteModel->find($id);
      require_once __DIR__ . '/../Views/Clientes/edit.php';
    }
  }

  public function update()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id = $_POST['id'];
      $dados = [
        'nomeCompleto' => $_POST['nomeCompleto'],
        'cpf' => $_POST['cpf'],
        'email' => $_POST['email'],
      ];

      if ($this->clienteModel->update($id, $dados)) {
        header('Location: index.php?action=index&success=2');
      } else {
        echo "Erro ao atualizar produto.";
      }
    }
  }

  public function delete()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      if ($this->clienteModel->delete($id)) {
        header('Location: index.php?action=index&success=3');
      } else {
        echo "Erro ao excluir produto.";
      }
    }
  }
}
