<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'usuario_lista_compras');
define('DB_PASSWORD', 'Senha@123');
define('DB_NAME', 'lista_compras');

$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

$sql = "SELECT * FROM itens_compra";


$result = $connection->query($sql);

if($result->num_rows>0) {
    while($row = $result->fetch_assoc()) {
        // Exibe os valores dos campos utilizando o método fetch_assoc()
        echo "ID: " . $row["id"] . "<br>";
        echo "nome " . $row["nome_produto"] . "<br>";
        echo "quantidade" . $row["quantidade"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "Nenhum registro encontrado";
}

$connection->close();
?>