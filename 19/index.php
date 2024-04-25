<?php
require_once 'database/PedidoRepository.php';

$action = $_GET['action'];

switch($action) {
    case 'listar';
        echo json_encode(PedidoRepository::getAllPedidos());
        break;
    default:
        break;
}
   

?>