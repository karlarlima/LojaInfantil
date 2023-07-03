<?php	
class Mpag{
    private $pag_id;
    private $pag_tipo;
    private $ped_id;

    public function __construct($pag_id, $pag_tipo, $ped_id) {
        $this-> pag_id= $pag_id; 
        $this-> pag_tipo = $pag_tipo; 
        $this-> ped_id = $ped_id; 
    }


public function getId(){
    return $this->pag_id;
}

public function getTipo(){
    return $this->pag_tipo;
}

public function getPed(){
    return $this->ped_id;
}

public function setId($pag_id) {
    $this->pag_id = $pag_id;
}

public function setTipo($pag_tipo) {
    $this->pag_tipo = $pag_tipo;
}
public function setPed($ped_id) {
    $this->ped_id = $ped_id;
}

}
?>