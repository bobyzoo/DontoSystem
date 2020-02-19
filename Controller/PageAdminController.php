<?php
require_once "View.php";
require_once "Model/UsuarioDAO.php";

class PageAdminController
{
    private $View;


    public function __construct()
    {
        $v = new View();
        $this->setView($v);
    }


    public function ver()
    {
        session_start();
        if (!UsuarioDAO::verificaConexao()) {
            header("Location: index.php");
            die();
        }
        $this->getView()->load('Admin', 'cabecalho_admin');
        $this->getView()->load('Admin', 'home');
    }

    public function slc_dashboard()
    {
        session_start();
        if (!UsuarioDAO::verificaConexao()) {
            header("Location: index.php");
            die();
        }
        $this->getView()->load('Admin', 'cabecalho_admin');
        $this->getView()->load('Admin/Dashboard', 'tabela');
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