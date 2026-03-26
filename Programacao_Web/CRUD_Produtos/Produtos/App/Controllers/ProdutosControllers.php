<?php
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../models/Produto.php';

class ProdutoController
{
  private $produtoModel;

  public function __construct()
  {
    $database = new Database();
    $db = $database->connect();
    $this->produtoModel = new Produto($db);
  }

  public function index()
  {
    $produtos = $this->produtoModel->all();
    require_once __DIR__ . '/../views/produtos/index.php';
  }

  public function create()
  {
    require_once __DIR__ . '/../views/produtos/create.php';
  }

  public function store()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $dados = [
        'nome' => $_POST['nome'],
        'descricao' => $_POST['descricao'],
        'preco' => $_POST['preco'],
        'quantidade' => $_POST['quantidade']
      ];

      if ($this->produtoModel->create($dados)) {
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
      $produto = $this->produtoModel->find($id);
      require_once __DIR__ . '/../views/produtos/edit.php';
    }
  }

  public function update()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id = $_POST['id'];
      $dados = [
        'nome' => $_POST['nome'],
        'descricao' => $_POST['descricao'],
        'preco' => $_POST['preco'],
        'quantidade' => $_POST['quantidade']
      ];

      if ($this->produtoModel->update($id, $dados)) {
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
      if ($this->produtoModel->delete($id)) {
        header('Location: index.php?action=index&success=3');
      } else {
        echo "Erro ao excluir produto.";
      }
    }
  }
}