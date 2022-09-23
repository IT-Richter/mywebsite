<?php

namespace App\User;

use App\Core\AbstractController;

class LoginController extends AbstractController
{
    public  $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function dashboard()
    {
        $this->loginService->check();
        $this->render("user/dashboard", []);
    }

    public function logout()
    {
        $this->loginService->logout();
        $this->render("user/login", [
            'message' => "Sie haben sich erfolgreich ausgelogt!"
        ]);
    }

    public function login()
    {
        $message = "0";
        if(!empty($_POST)){
            $message = "Bitte Benutzernamen und Password eingeben";
        }
        if (!empty($_POST['username']) AND !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->loginService->attempt($username, $password)) {
                header('Location: /mywebsite?page=daschboard');
                return;
            } else {
                $message = "Benutzername und/oder Password inkorrekt";
            }
        }

        $this->render("user/login", [
            'message' => $message
        ]);
    }
}
