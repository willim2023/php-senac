<?php

class DatabaseRepository
{
    private static $server = 'localhost';
    private static $username = 'usuario_contatos';
    private static $password = 'Senha@123';
    private static $database = 'contatos';

    public static function connect()
    {
        return new mysqli(self::$server, self::$username, self::$password, self::$database);
    }

    public static function getAllContacts()
    {
        $connection = self::connect();
        $result = $connection->query("SELECT * FROM contatos_info");

        $contatos = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $contatos[] = $row;
            }
        }
        $connection->close();
        return $contatos;
    }

    public static function getServerValues()
    {
        return  self::$server . " - " . self::$username;
    }
}



?>