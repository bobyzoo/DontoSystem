<?php


namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;


class User extends DataLayer
{
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $user_name;

    public function __construct()
    {
        parent::__construct("users", ["user_name", "password"], "id", false);

    }

    /**
     * @param $user_name string
     * @param $password string
     * @return string
     */
    public function add($user_name, $password)
    {
        $this->user_name = md5($user_name);
        $this->password = md5($password);
        if ($this->id = parent::save()) {
            return $this;
        }
        return $this->fail->getMessage();
    }

    /**
     * @param $user_name
     * @param $password
     * @return bool
     */
    public function checkPassword($user_name, $password)
    {

        $this->user_name = md5($user_name);
        $this->password = md5($password);

        if (parent::find("user_name = :user", "user=$this->user_name")->find("password = :pass", "pass=$this->password")->fetch() != null) {
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    public static function checkConnection(){
        session_start();
        if(isset($_SESSION['conectado']) and $_SESSION['conectado'] == '1'){
            return true;
        }
        return false;
    }



}