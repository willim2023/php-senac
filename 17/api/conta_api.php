<?php
require_once '../database/ContaRepository.php';

$action = $_GET['action'];

switch($action) {
    case 'listar':
        listarContas();
        break;
        case 'buscar':
            buscarContaById();
            break;
        case 'cadastrar':
            cadastrarConta();
            break;
        case 'atualizar':
            atualizarConta();
            break;
        case 'excluir':
            excluirConta();
            break;
    default:
        http_response_code(400); // Requisição inválida
        echo json_encode(['error' => 'Ação inválida']);
}

function listarContas() {
    $contas = ContaRepository::getAllContas();
    echo json_encode($contas);
}

function buscarContaById () {
    
}

function  cadastrarConta() {
     
}

function  atualizarConta() { 
     
}

function excluirConta() {

}

// Create Read Update Delete
// Create = POST (INSERT)
// Read = GET (SELECT)
// Update = POST(GET) (UPDATE SET)
// Delete = POST (DELETE)
?>