<?php	
class Mped{
    private $ped_id;
    private $ped_data;
    private $car_id;
    private $envi_id;

    public function __construct($ped_id, $ped_data, $car_id, $envi_id) {
        $this-> ped_id= $ped_id; 
        $this-> ped_data = $ped_data; 
        $this-> car_id = $car_id;
        $this-> envi_id = $envi_id; 
    }

public function getId(){
    return $this->ped_id;
}

public function getData(){
    return $this->ped_data;
}

public function getCar(){
    return $this->car_id;
}

public function getEnvi(){
    return $this->envi_id;
}

public function setId($ped_id) {
    $this->ped_id = $ped_id;
}

public function setData($ped_data) {
    $this->ped_data = $ped_data;
}
public function setCar($car_id) {
    $this->car_id = $car_id;
}

public function setEnvi($envi_id) {
    $this->envi_id = $envi_id;
}
}
?>