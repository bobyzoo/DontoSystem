<?php
if(!isset($_GET['m'])){
    header("Location: index.php?m=PageHome&a=page_home");

}
try {
$moduloExterno = $_GET['m'];
$acaoExterna   = $_GET['a'];

$nomeController = ucfirst($moduloExterno).'Controller';

require_once 'Controller/'.$moduloExterno.'Controller.php';


$teste = new $nomeController;
$teste->$acaoExterna();

}
catch (Error $exception){
    header("Location: index.php?m=PageHome&a=page_home");
    die();
}

