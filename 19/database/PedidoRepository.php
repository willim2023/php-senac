<?php

require_once 'DatabaseRepository.php';
require_once 'model/Pedido.php';

class PedidoRepository {
    public static function getAllPedidos() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM pedido");

        $pedidos = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $pedido = new Pedido($row['id'], $row['data_pedido'], $row['status']);
                $pedidos[] = $pedido;
            }
        }
        $connection->close();
        return $pedidos;
    }

    public static function getPedidoById($id) {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM pedido WHERE id = $id");

        $pedido = null;
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $pedido = new Pedido($row['id'], $row['data_pedido'], $row['status']);            
        }
        return $pedido;
    }

    public static function insertPedido(Pedido $pedido) {        
        $connection = DatabaseRepository::connect();

        $data_pedido = $pedido->getDataPedido();
        $status = $pedido->getStatus();

        $sql = "INSERT INTO pedido (data_pedido, status) VALUES ('$data_pedido', '$status')";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }

    public static function updatePedido(Pedido $pedido, $id) {
        $connection = DatabaseRepository::connect();       
        $data_pedido = $pedido->getDataPedido();
        $status = $pedido->getStatus();

        $sql = "UPDATE pedido SET data_pedido = '$data_pedido', status = '$status' WHERE id = $id";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }

    public static function deletePedido() {

    }
}
?>