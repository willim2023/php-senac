<?php
require_once 'DatabaseRepository.php';
require_once 'model/Produto.php';

class ProdutoRepository {
    public static function getAllProdutos() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM produto");

        $produtos = [];        
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $produto = new Produto($row['id'], $row['nome'], $row['descricao'], $row['preco']);
                $produtos[] = $produto;
            }
        }
        $connection->close();
        return $produtos;
    }

    public static function getProdutoById($id) {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM produto WHERE id = $id");

        $produto = null;
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $produto = new Produto($row['id'], $row['nome'], $row['descricao'], $row['preco']);
        }
        $connection->close();
        return $produto;
    }

    public static function insertProduct(Produto $produto) {
        $connection = DatabaseRepository::connect();

        $nome = $produto->getNome();
        $descricao = $produto->getDescricao();
        $preco = $produto->getPreco();

        $sql = "INSERT INTO produto (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
        $success = $connection->query($sql);
        $connection->close();
        return $success;
    }
}
?>