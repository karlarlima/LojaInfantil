<?php	
class Mcli{
    private $cli_cpf;
    private $cli_usu;
    private $cli_end;
    private $cli_name;
    private $cli_born;

    public function __construct($cli_cpf, $cli_usu, $cli_end, $cli_name, $cli_born) {
        $this-> cli_cpf= $cli_cpf; 
        $this-> cli_usu = $cli_usu; 
        $this-> cli_end = $cli_end; 
        $this-> cli_name = $cli_name; 
        $this-> cli_born = $cli_born; 
    }

public function getCpf(){
    return $this->cli_cpf;
}

public function getUsu(){
    return $this->cli_usu;
}

public function getEnd(){
    return $this->cli_end;
}

public function getName(){
    return $this->cli_name;
}

public function getBorn(){
    return $this->cli_born;
}

public function setCpf($cli_cpf) {
$this->cli_cpf = $cli_cpf;
}

public function setUsu($cli_usu) {
    $this->cli_usu = $cli_usu;
}

public function setEnd($cli_end) {
    $this->cli_end = $cli_end;
}

public function setName($cli_name) {
    $this->cli_name = $cli_name;
}

public function setBorn($cli_born) {
    $this->cli_born = $cli_born;
}
}
