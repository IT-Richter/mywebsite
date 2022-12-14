<?php

namespace App\Core;

use App\Guestbook\GuestbookEntryRepository;
use App\Guestbook\guestbookController;
use App\User\UsersRepository;
use App\User\LoginController;
use App\User\LoginService;
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
            'usersRepository' => function() {
                return new UsersRepository(
                    $this->make("pdo")
                );
            },
            'loginController' => function() {
                return new LoginController(
                    $this->make("loginService")
                );
            },
            'loginService' => function() {
                return new LoginService(
                    $this->make("usersRepository")
                );
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