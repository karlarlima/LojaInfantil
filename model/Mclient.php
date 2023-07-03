<?php	

class Mcli{
    private $cli_cpf;
    private $cli_name;
    private $cli_born;
    private $usu_id;
    private $end_id;

    public function __construct($cli_cpf, $cli_name, $cli_born, $usu_id, $end_id) {
        $this-> cli_cpf= $cli_cpf; 
        $this-> cli_name = $cli_name; 
        $this-> cli_born = $cli_born; 
        $this-> usu_id = $usu_id; 
        $this-> end_id = $end_id; 
    }

public function getName(){
    return $this->cli_name;
}

public function getBorn(){
    return $this->cli_born;
}

public function getCpf(){
    return $this->cli_cpf;
}

public function getUid(){
    return $this->usu_id;
}

public function getEid(){
    return $this->end_id;
}

public function setName($cli_name) {
$this->cli_name = $cli_name;
}

public function setBorn($cli_born) {
    $this->cli_born = $cli_born;
}

public function setCpf($cli_cpf) {
    $this->cli_cpf = $cli_cpf;
}

public function setUid($usu_id) {
    $this->usu_id = $usu_id;
}

public function setEid($end_id) {
    $this->end_id = $end_id;
}
}
