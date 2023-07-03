<?php		

class Muser{
    private $end_id;
    private $end_num;
    private $end_logra;
    private $end_bai;
    private $end_mun;
    private $end_reg;

    public function __construct($end_id, $end_num, $end_logra, $end_bai, $end_mun, $end_reg) {
        $this-> end_id= $end_id; 
        $this-> end_num = $end_num; 
        $this-> end_logra = $end_logra; 
        $this-> end_bai = $end_bai; 
        $this-> end_mun = $end_mun;
        $this-> end_reg = $end_reg; 
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
    return $this->end_bai;
}

public function getMun(){
    return $this->end_mun;
}

public function getReg(){
    return $this->end_reg;
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

public function setBai($end_bai) {
    $this->end_bai = $end_bai;
}

public function setMun($end_mun) {
    $this->end_mun = $end_mun;
}

public function setReg($end_reg) {
    $this->end_reg = $end_reg;
}
}
