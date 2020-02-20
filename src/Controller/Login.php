<?php

namespace Source\Controller;


use UsuarioDAO;

require_once __DIR__ . "/../../Model/UsuarioDAO.php";


class Login
{

    public function login()
    {
        session_start();
        if (UsuarioDAO::verificaConexao()) {
            header("Location: index.php");
            die();
        }
        require_once __DIR__ . "/../../Templates/Admin/login.php";
    }

}