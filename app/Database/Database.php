<?php

namespace App\Database;

class Database
{

    public static function getConnection ()
    {
        $host = env('DB_HOST');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $database = env('DB_DATABASE');

        $connection = new \mysqli($host, $username, $password, $database);

        if ($connection->connect_error) {
            throw new \Exception('Erro ao se conectar com o banco de dados');
        }

        return $connection;
    }

}