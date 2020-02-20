<?php

namespace Source\Controller;

class Web
{

    public function home()
    {
        require_once __DIR__ . "/../../Templates/Page/PageHome.php";
    }

    public function professional()
    {
        require_once __DIR__ . "/../../Templates/Page/PageProfissionais.php";
    }

    public function healthInsurance()
    {
        require_once __DIR__ . "/../../Templates/Page/PageHome.php";
    }

    public function contact()
    {
        require_once __DIR__ . "/../../Templates/Page/Contato.php";
    }

    public function Error($data)
    {
        echo "Error: {$data['errcode']}";
        var_dump($data);
    }

}