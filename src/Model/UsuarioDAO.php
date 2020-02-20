<?php
require_once __DIR__ . "/Connection.php";
require_once __DIR__ . "/../vendor/autoload.php";
use CoffeeCode\DataLayer\Connect;

class UsuarioDAO
{
    private $conn;
    private $error;

    public function __construct()
    {
        $this->setConn(Connect::getInstance());
        $this->setError(Connect::getError());

    }

    public static function verificaLogin($usuario,$senha)
    {
        try {
            $sql = "SELECT * FROM usuario where usuario = :usuario and senha = :senha";
            $p_sql = Connection::getInstance()->prepare($sql);
            $p_sql->bindValue(':usuario',$usuario);
            $p_sql->bindValue(':senha',$senha);
            $p_sql->execute();
           if($p_sql->fetch(PDO::FETCH_OBJ)){
               return true;
            }
            return false;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
                getCode() . " Mensagem: " . $e->getMessage());
        }
    }

    public static function logout(){
        $_SESSION['conectado'] = '0';
        $_SESSION['login'] = '';
        $_SESSION['senha'] = '';
    }

    /**
     * @return bool
     */
    public static function verificaConexao(){
//        if(isset($_SESSION['conectado']) and $_SESSION['conectado'] == '1'){
//            return true;
//        }
//        return false;
    }

    /**
     * @return mixed
     */
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * @param mixed $conn
     */
    public function setConn($conn)
    {
        $this->conn = $conn;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }


}