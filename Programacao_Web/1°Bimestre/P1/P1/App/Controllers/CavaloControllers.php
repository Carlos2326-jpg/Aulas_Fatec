<?php

require_once __DIR__ . '/../Models/Cavalo.php';
require_once __DIR__ . '/../../Core/Database.php';

class CavalosController {
    private $cavaloModel;

    public function __construct() {
        $database = new Database();
        $db = $database->connect();
        $this->cavaloModel = new Cavalos($db);   
    }

    public function index() {
        $cavalo = $this->cavaloModel->all();
        require_once __DIR__ . '/../Viwer/Cavalo/index.php';
    }

    public function creat() {
        require_once __DIR__ . '/../Viwer/Cavalo/creat.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'nome' => $_POST['nome'],
                'raca' => $_POST['raca'],
                'cor' => $_POST['cor'],
                'sexo' => $_POST['sexo']
            ];
        }

        if ($this->cavaloModel->create($dados)) {
            header('Location: index.php?controller=cavalo&action=index&success=1');
        } else {
            echo "Erro no cadastro!";
        }
    }

    public function edit() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            
            $cavalos = $this->cavaloModel->fill($id);

            require_once __DIR__ . '/../Viwer/Cavalo/edit.php';
        }
    }

    public function update() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $dados = [
                'nome' => $_POST['nome'],
                'raca' => $_POST['raca'],
                'cor' => $_POST['cor'],
                'sexo' => $_POST['sexo']
            ];

            if ($this->cavaloModel->update($id, $dados)) {
                header('Location: index.php?controller=cavalo&action=index&success=2');
            } else {
                echo "Erros ao atualizar";
            }
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($this->cavaloModel->delete($id)) {
              header('Location: index.php?controller=cavalo&ction=index&success=3');
            } else {
              echo "Erro ao excluir.";
            }
        }
    }
}