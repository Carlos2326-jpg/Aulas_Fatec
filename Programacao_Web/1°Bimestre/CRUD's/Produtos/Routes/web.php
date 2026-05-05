<?php
require_once __DIR__ . '/../App/Controllers/ProdutosControllers.php';
require_once __DIR__ . '/../App/Controllers/ClienteControllers.php';
require_once __DIR__ . '/../App/Controllers/HomeController.php';

// Pega os parâmetros da URL
$controllerName = $_GET['controller'] ?? "home";
$action = $_GET['action'] ?? 'index';

// Instancia o controller correto baseado no parâmetro
switch ($controllerName) {
    case 'produtos':
        $controller = new ProdutoController();
        break;
    case 'clientes':
        $controller = new ClienteController();
        break;
    case  'home':
        $controller = new HomeController();
        break;
}   

// Executa a ação do controller
switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit($_GET['id'] ?? null);
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete($_GET['id'] ?? null);
        break;
    default:
        echo "Ação não encontrada.";
        break;
}
