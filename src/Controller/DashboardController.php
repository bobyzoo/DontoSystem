<?php
require_once "ViewController.php";
require_once "Model/UsuarioDAO.php";


class DashboardController

{
    private $View;


    public function __construct()
    {
        $v = new ViewController();
        $this->setView($v);
    }

    public function getTabela(){
        $elogios = [
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','gato','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15'],
            ['1','bolacha','15']
        ];

        $response = new StdClass();
        $response->data = $elogios;

        print_r(json_encode($response));
    }



    /**
     * @return ViewController
     */
    public function getView()
    {
        return $this->View;
    }

    /**
     * @param ViewController $View
     */
    public function setView($View)
    {
        $this->View = $View;
    }
}