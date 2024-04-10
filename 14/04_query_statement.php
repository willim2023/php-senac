<?php
// Definindo constantes para a conexão com o banco de dados
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'usuario_contatos');
define('DB_PASSWORD', 'Senha@123');
define('DB_NAME', 'contatos');

// Criar uma conexão com o banco de dados.
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificando se ocorreu algum erro de conexão
if($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

// Definindo o ID que você deseja buscar
$id = 3;

// Definindo o ID que você deseja buscar
$sql = "SELECT * FROM contatos_info WHERE id = ?"; 
$stmt = $connection->prepare($sql);

if($stmt) {
    // Associando o parâmetro á consulta preparada
    $stmt->bind_param("i", $id);

    // Executando a consulta
    $stmt->execute();

    // Armazenando o resultado da consulta e uma variavel
    $result = $stmt->get_result();

    // Verificando se há resultados
    if ($result->num_rows > 0) {
        // Obtendo a linha resultante
        $row = $result->fetch_assoc();

        echo "ID: " . $row["id"] . "<br>";
        echo "Nome: " . $row["nome"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "<hr>";
    } else {
        echo "Nenhum registro encontrado.";
    }

    // Fechando a consulta preparada
    $stmt->close();
} else {
    echo "Erro na consulta preparada: " . $connection->error;
}

// Fechando a conexão 
$connection->close();


?>