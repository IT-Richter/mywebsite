<?php

namespace App\Core;

use PDO;
use PDOException;

class Container
{

    private $receipts = [];
    private $instances = [];

    public function __construct()
    {
        $this->receipts = [
            'coreController' => function () {
            return new CoreController();
            },
            'pdo' => function () {
                try {
                    $pdo = new PDO(
                        'mysql:host=localhost;dbname=blog;charset=utf8',
                        'blog',
                        'TX4LQBEzfZfVqnLV'
                    );
                } catch (PDOException $e) {
                    echo "Verbindung zur Datenbank fehlgeschlagen";
                    die();
                }
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $pdo;
            }
        ];
    }

    public function make($name)
    {
        if (!empty($this->instances[$name])) {
            return $this->instances[$name];
        }

        if (isset($this->receipts[$name])) {
            $this->instances[$name] = $this->receipts[$name]();
        }

        return $this->instances[$name];
    }

}