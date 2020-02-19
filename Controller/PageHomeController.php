<?php
require_once "View.php";

class PageHomeController
{
    private $View;



    public function __construct()
    {
        $v = new View();
        $this->setView($v);
    }

    /**
     */
    public function page_home(){
        $this->getView()->load('Page','Cabecalho');
        $this->getView()->load('Page','PageHome');
        $this->getView()->load('Page','FormConsulta');
        $this->getView()->load('Page','Rodape');
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