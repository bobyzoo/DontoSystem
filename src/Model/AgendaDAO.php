<?php
require_once "Connection.php";

class AgendaDAO
{


    private $nome;
    private $email;
    private $telefone;
    private $data_agendamento;
    private $data_agendada;
    private $horario;
    private $convenio;
    private $servico;


    public static function all()
    {
        try {
            $sql = "SELECT id,nome,email FROM agenda";
            $p_sql = Connection::getInstance()->prepare($sql);
            $p_sql->execute();
            $objetos = [];
            while ($linha = $p_sql->fetch(PDO::FETCH_ASSOC)){
                array_push($objetos,self::popula($linha));
            }
            return $objetos;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
                getCode() . " Mensagem: " . $e->getMessage());
        }
    }

    public static function popula($row){
       $obj = new AgendaDAO();
        $obj->setConvenio($row['convenio']);
        $obj->setDataAgendada($row['data_agendada']);
        $obj->setDataAgendamento($row['data_agendamento']);
        $obj->setEmail($row['email']);
        $obj->setNome($row['nome']);
        $obj->setHorario($row['horario']);
        $obj->setTelefone($row['telefone']);
        $obj->setServico($row['servico']);

        return $obj;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getDataAgendamento()
    {
        return $this->data_agendamento;
    }

    /**
     * @param mixed $data_agendamento
     */
    public function setDataAgendamento($data_agendamento)
    {
        $this->data_agendamento = $data_agendamento;
    }

    /**
     * @return mixed
     */
    public function getDataAgendada()
    {
        return $this->data_agendada;
    }

    /**
     * @param mixed $data_agendada
     */
    public function setDataAgendada($data_agendada)
    {
        $this->data_agendada = $data_agendada;
    }

    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * @param mixed $horario
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    /**
     * @return mixed
     */
    public function getConvenio()
    {
        return $this->convenio;
    }

    /**
     * @param mixed $convenio
     */
    public function setConvenio($convenio)
    {
        $this->convenio = $convenio;
    }

    /**
     * @return mixed
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * @param mixed $servico
     */
    public function setServico($servico)
    {
        $this->servico = $servico;
    }




}