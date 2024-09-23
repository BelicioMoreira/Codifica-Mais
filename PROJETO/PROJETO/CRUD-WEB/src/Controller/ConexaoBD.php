<?php

    namespace App\Controller;

    use PDO;
    use PDOException;

class ConexaoDB 
{
    public static function createConnection(): PDO 
    {   
        try {
            $connection = new PDO(
                "mysql:host=localhost;dbname=estoque",
                'root',
                '123456'
            );
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $connection;
        } catch (PDOException $e) {
            die('Erro ao conectar com o banco de dados' . $e->getMessage());
        }

        return false;
    }
}