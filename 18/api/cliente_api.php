<?php

require_once '../database/ClienteRepository.php';
require_once '../model/cliente.php';

$action = $_GET['action'];

switch($action) {
    case 'listar':
        listarClientes();
        break;
    case 'buscar':
        buscarClientePorId();
        break;
    case 'cadastrar':
        cadastrarCliente();
        break;
    case 'atualizar':
        atualizarCliente();
        break;
    case 'excluir':
        excluirCliente();
        break;
    default:
        http_response_code(400); // Requisição inválida
        echo json_encode(['error' => 'Ação inválida']);
}

function listarClientes() {
    $clientes = ClienteRepository::getAllClientes();
    echo json_encode($clientes);
}

function buscarClientePorId() {
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        $cliente = ClienteRepository::getClienteById($id);

        if($cliente) {
            echo json_encode($cliente);
        } else {
            http_response_code(404); // Cliente não encontrado
            echo json_encode(['error' => 'Cliente não encontrado']);
        }
    } else {
        http_response_code(405); // Método não permitido
    }
}

function cadastrarCliente() {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        
        $cliente = new Cliente(null, $data->nome, $data->cpf);
        $success = ClienteRepository::insertCliente($cliente);
        echo json_encode(['success' => $success]);
    } else {
        http_response_code(405);
    }
}

function atualizarCliente() {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        
        $cliente = new Cliente($data->id, $data->nome, $data->cpf);
        $success = ClienteRepository::updateCliente($cliente);
        echo json_encode(['success' => $success]);
    } else {
        http_response_code(405);
    }
}

function excluirCliente() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;

        $success = ClienteRepository::deleteCliente($id);
        echo json_encode(['success' => $success]);
    } else {
        http_response_code(405);
    }
}
// Create Read Update Delete
// Create = POST (INSERT)
// Read = GET (SELECT)
// Update = POST(GET) (UPDATE SET)
// Delete = POST (DELETE)