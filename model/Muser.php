<?php	

class Muser{
    private $usu_id;
    private $usu_pass;
    private $usu_email;
    private $usu_ad;
    private $usu_cli;

    public function __construct($usu_id, $usu_pass, $usu_email, $usu_ad, $usu_cli) {
        $this-> usu_id= $usu_id; 
        $this-> usu_pass = $usu_pass; 
        $this-> usu_email = $usu_email;
        $this-> usu_ad = $usu_ad;
        $this-> usu_cli = $usu_cli;
    }


public function getId(){
    return $this->usu_id;
}

public function getPass(){
    return $this->usu_pass;
}

public function getEmail(){
    return $this->usu_email;
}

public function getAdmin(){
    return $this->usu_ad;
}

public function getCliente(){
    return $this->usu_cli;
}

public function setId($usu_id) {
    $this->usu_id = $usu_id;
}

public function setPass($usu_pass) {
    $this->usu_pass = $usu_pass;
}

public function setEmail($usu_email) {
    $this->usu_email = $usu_email;
}

public function setAdmin($usu_ad) {
    $this->usu_ad = $usu_ad;
}

public function setCliente($usu_cli) {
    $this->usu_cli = $usu_cli

}

}
?>