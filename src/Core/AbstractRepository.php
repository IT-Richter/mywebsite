<?php

namespace App\Core;

use PDO;

abstract class AbstractRepository
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    abstract public function getTableName();

    abstract public function getModelName();

    function all()
    {
        $table = $this->getTableName();
        $model = $this->getModelName();
        $stmt = $this->pdo->query("SELECT * FROM `$table` ORDER BY `id` DESC");
        return $stmt->fetchAll(PDO::FETCH_CLASS, $model);
    }

    function find($id)
    {
        $table = $this->getTableName();
        $model = $this->getModelName();
        $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $model);
        return $stmt->fetch(PDO::FETCH_CLASS);

    }
}
