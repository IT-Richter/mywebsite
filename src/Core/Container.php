<?php

namespace App\Core;

use App\Guestbook\GuestbookEntryRepository;
use App\Guestbook\guestbookController;
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
            'guestbookController' => function (){
            return new GuestbookController($this->make('guestbookentryRepository'));
            },
            'guestbookentryRepository' => function (){
            return new GuestbookEntryRepository($this->make('pdo'));
            },
            'pdo' => function () {
                try {
                    $pdo = new PDO(
                        'mysql:host=localhost;dbname=website;charset=utf8',
                        'kai',
                        'SHy1_NY7E-)iOkgJ'
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