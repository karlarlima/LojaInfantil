<?php	
class Mpag{
    private $pag_id;
    private $pag_tipo;
    private $pag_ped;

    public function __construct($pag_id, $pag_tipo, $pag_ped) {
        $this-> pag_id= $pag_id; 
        $this-> pag_tipo = $pag_tipo; 
        $this-> pag_ped = $pag_ped; 
    }


public function getId(){
    return $this->pag_id;
}

public function getTipo(){
    return $this->pag_tipo;
}

public function getPed(){
    return $this->pag_ped;
}

public function setId($pag_id) {
    $this->pag_id = $pag_id;
}

public function setTipo($pag_tipo) {
    $this->pag_tipo = $pag_tipo;
}
public function setPed($pag_ped) {
    $this->pag_ped = $pag_ped;
}

}
?>