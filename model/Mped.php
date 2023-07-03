<?php	
class Mped{
    private $ped_id;
    private $ped_data;
    private $ped_car;
    private $ped_envi;

    public function __construct($ped_id, $ped_data, $ped_car, $ped_envi) {
        $this-> ped_id= $ped_id; 
        $this-> ped_data = $ped_data; 
        $this-> ped_car = $ped_car;
        $this-> ped_envi = $ped_envi; 
    }

public function getId(){
    return $this->ped_id;
}

public function getData(){
    return $this->ped_data;
}

public function getCar(){
    return $this->ped_car;
}

public function getEnvi(){
    return $this->ped_envi;
}

public function setId($ped_id) {
    $this->ped_id = $ped_id;
}

public function setData($ped_data) {
    $this->ped_data = $ped_data;
}
public function setCar($ped_car) {
    $this->ped_car = $ped_car;
}

public function setEnvi($ped_envi) {
    $this->ped_envi = $ped_envi;
}
}
?>