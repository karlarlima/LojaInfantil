<?php		

class Muser{
    private $end_id;
    private $end_num;
    private $end_logra;
    private $bai_id;
    private $mun_id;
    private $reg_id;

    public function __construct($end_id, $end_num, $end_logra, $bai_id, $mun_id, $reg_id) {
        $this-> end_id= $end_id; 
        $this-> end_num = $end_num; 
        $this-> end_logra = $end_logra; 
        $this-> bai_id = $bai_id; 
        $this-> mun_id = $mun_id;
        $this-> reg_id = $reg_id; 
    }

public function getNum(){
    return $this->end_num;
}

public function getLogra(){ 
    return $this->end_logra;
}

public function getId(){
    return $this->end_id;
}

public function getBai(){
    return $this->bai_id;
}

public function getMun(){
    return $this->mun_id;
}

public function getReg(){
    return $this->reg_id;
}

public function setNum($end_num) {
$this->end_num = $end_num;
}

public function setLogra($end_logra) {
    $this->end_logra = $end_logra;
}

public function setId($end_id) {
    $this->end_id = $end_id;
}

public function setBai($bai_id) {
    $this->bai_id = $bai_id;
}

public function setMun($mun_id) {
    $this->mun_id = $mun_id;
}

public function setReg($reg_id) {
    $this->reg_id = $reg_id;
}
}
