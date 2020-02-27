<?php

namespace Source\Controller;

use Source\Models\User;



class Login
{

    public function login()
    {
        if (User::checkConnection()) {
            header("Location: index.php");
            die();
        }
        require_once __DIR__ . "/../../Templates/Admin/login.php";
    }

}