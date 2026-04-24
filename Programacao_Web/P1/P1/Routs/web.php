<?php
require_once __DIR__ . '/../App/Controllers/CavaloControllers.php';

$controller = new CavalosController();
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $controller->index();
        break;  
    case 'create':
        $controller->creat();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        echo "Rota não encontrada.";
        break;
}