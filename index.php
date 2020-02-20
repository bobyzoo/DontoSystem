<?php
//if(!isset($_GET['m'])){
//    header("Location: index.php?m=PageHome&a=page_home");
//
//}
//try {
//$moduloExterno = $_GET['m'];
//$acaoExterna   = $_GET['a'];
//
//$nomeController = ucfirst($moduloExterno).'Controller';
//
//require_once 'Controller/'.$moduloExterno.'Controller.php';
//
//
//$teste = new $nomeController;
//$teste->$acaoExterna();
//
//}
//catch (Error $exception){
//    header("Location: index.php?m=PageHome&a=page_home");
//    die();
//}
//


require_once __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);
$router->namespace("Source\Controller");

/*
 *
 * WEB
 * home
 *
 */

$router->group(null);
$router->get("/", "Web:home");
$router->get("/profissionais","Web:professional");
$router->get("/convenio","Web:professional");
$router->get("/contato","Web:contact");
$router->get("/login","Login:login");





$router->group("ooops");
$router->get("/{errcode}","Web:Error");


$router->dispatch();


if($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}



