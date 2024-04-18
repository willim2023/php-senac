<?php
require_once '../database/ContaRepository.php';

$action = $_GET['action'];



switch($action) {
    case 'listar':
        listarClientes();
        break;
    default:
        http_response_code(400); // Requisição inválida
        echo json_encode(['error' => 'Ação inválida']);
}

function listarClientes() {
    $contas = ContaRepository::getAllContas();
        echo json_encode($contas);
    
}


?>