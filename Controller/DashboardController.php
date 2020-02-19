<?php
require_once "View.php";
require_once "Model/UsuarioDAO.php";


class DashboardController

{
    private $View;


    public function __construct()
    {
        $v = new View();
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