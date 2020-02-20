<?php
require_once "ViewController.php";

class PageHomeController
{
    private $View;



    public function __construct()
    {
        $v = new ViewController();
        $this->setView($v);
    }

    /**
     */
    public function page_home(){
        require_once "../../Templates/Page/PageHome.php";
//        $this->getView()->load('Page','Cabecalho');
//        $this->getView()->load('Page','PageHome');
//        $this->getView()->load('Page','FormConsulta');
//        $this->getView()->load('Page','Rodape');
    }

    public function page_profissionais(){
        $this->getView()->load('Page','Cabecalho');
        $this->getView()->load('Page','PageProfissionais');
        $this->getView()->load('Page','Rodape');
    }
    public function page_contato(){
        $this->getView()->load('Page','Cabecalho');
        $this->getView()->load('Page','FormContato');
        $this->getView()->load('Page','Contato');
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