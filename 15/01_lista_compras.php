<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'usuario_lista_compras');
define('DB_PASSWORD', 'senha123');
define('DB_NAME', 'lista_compras');

$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

$sql = "SELECT * FROM contatos_info";


?>