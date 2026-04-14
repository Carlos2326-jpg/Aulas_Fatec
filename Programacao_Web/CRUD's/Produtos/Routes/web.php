<?php
require_once __DIR__ . '/../App/Controllers/ProdutosControllers.php';
require_once __DIR__ . '/../App/Controllers/ClienteControllers.php';

$controllerProduto = new ProdutoController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $controllerProduto->index();
        break;
    case 'create':
        $controllerProduto->create();
        break;
    case 'store':
        $controllerProduto->store();
        break;
    case 'edit':
        $controllerProduto->edit();
        break;
    case 'update':
        $controllerProduto->update();
        break;
    case 'delete':
        $controllerProduto->delete();
        break;
    default:
        echo "Rota não encontrada.";
        break;
}