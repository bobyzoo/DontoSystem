<?php
require_once "View.php";
require_once "Model/UsuarioDAO.php";

class PageLoginController
{
    private $View;

    public function __construct()
    {
        $v = new View();
        $this->setView($v);
    }

    public function verifica()
    {
        session_start();
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        if (UsuarioDAO::verificaLogin($login, $senha)) {
            $_SESSION['login'] = $login;
            $_SESSION['conectado'] = '1';
            $_SESSION['senha'] = $senha;
            echo 1;
            die();
        }
        $_SESSION['conectado'] = '0';
        echo 0;
        die();
    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location:index.php?m=PageHome&a=page_login");
        die();
    }
    public function page_login(){
        session_start();
        if (UsuarioDAO::verificaConexao()) {
            header("Location: index.php?m=PageAdmin&a=ver");
            die();
        }
        $this->getView()->load('Page','Cabecalho');
        $this->getView()->load('Admin','Login');
    }

    /**
     * @return View
     */
    public function getView()
    {
        return $this->View;
    }

    /**
     * @param View $View
     */
    public function setView($View)
    {
        $this->View = $View;
    }

}