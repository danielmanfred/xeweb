<?php
/**
 * Description of PDOConnectionFactory
 *
 * @author Manfred
 */
class PDOConnectionFactory {
    protected $con = null;
    protected $bdTipo = "mysql";
    
    protected $host = "localhost";
    protected $usuario = "root";
    protected $senha = "xe";
    protected $bd = "xen";
    
    protected $persistencia = false;
    
    public function PDOConnectionFactory($persistencia = false) {
        if ($persistencia != false) {
            $this->persistencia = true;
        }
    }
    
    public function getConnection() {
        try {
            $this->con = new PDO($this->bdTipo . ":host=" . $this->host . ";dbname=". $this->bd, $this->usuario, $this->senha, array(PDO::ATTR_PERSISTENT => $this->persistencia));
            return $this->con;
        } catch (Exception $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }
    
    public function close() {
        if ($this->con != null) {
            $this->con = null;
        }
    }
}
