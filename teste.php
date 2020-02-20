<?php


require_once __DIR__."/vendor/autoload.php";




use Source\Models\User;

//
//$user = new User();
//$list = $user->find()->fetch(true);
//
//
///** @var User $item */
//foreach ($list as $item) {
//    var_dump($item->user_name);
//}



$user = new User();

$result = $user->checkPassword('bobyzoo','admin');

var_dump($result);