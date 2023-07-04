<?php	
class Mclient{
    private $cli_id;
    private $cli_end;
    private $cli_name;
    private $cli_born;
    private $cli_email;
    private $cli_pass;
    private $cli_usu;
    private $cli_cpf;
    private $cli_cell;

    public function __construct($cli_id, $cli_end, $cli_name, $cli_born, $cli_email, $cli_pass, $cli_usu, $cli_cpf, $cli_cell) {
        $this-> cli_id= $cli_id; 
        $this-> cli_end = $cli_end; 
        $this-> cli_name = $cli_name; 
        $this-> cli_born = $cli_born; 
        $this-> cli_email = $cli_email;
        $this-> cli_pass = $cli_pass;
        $this-> cli_usu = $cli_usu;
        $this-> cli_cpf = $cli_cpf;
        $this-> cli_cell = $cli_cell; 
    }

public function getId(){
    return $this->cli_id;
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

public function getEmail(){
    return $this->cli_email;
}

public function getPass(){
    return $this->cli_pass;
}

public function getUsu(){
    return $this->cli_usu;
}

public function getCpf(){
    return $this->cli_cpf;
}

public function getCell(){
    return $this->cli_cell;
}

public function setId($cli_id) {
    $this->cli_id = $cli_id;
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

public function setEmail($cli_email) {
    $this->cli_email = $cli_email;
}

public function setPass($cli_pass) {
    $this->cli_pass = $cli_pass;
}

public function setUsu($cli_usu) {
    $this->cli_usu = $cli_usu;
}

public function setCpf($cli_cpf) {
    $this->cli_cpf = $cli_cpf;
}

public function setCell($cli_cell) {
    $this->cli_cell = $cli_cell;
}
}
