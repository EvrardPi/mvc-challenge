<?php

namespace App\Core;

class DatabaseConnexion
{
    private $host = $_ENV['DB_HOST'];
    private $port = $_ENV['DB_PORT'];
    private $dbname = $_ENV['DB_NAME'];
    private $user = $_ENV['DB_USER'];
    private $password = $_ENV['DB_PASSWORD'];

    public function getPDO()
    {
        $pdo = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}