<?php

namespace App\Controllers;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;

abstract class BaseController
{
    protected Connection $database;
    public function __construct()
    {
        // TODO: Add $_ENV (.env)
        $connectionParams = [
            'dbname' => 'article',
            'user' => 'root',
            'password' => 'Pavasaris98!!',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',
        ];

        $this->database = DriverManager::getConnection($connectionParams);
    }
}