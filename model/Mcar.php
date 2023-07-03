<?php	
class Mcar{
    private $car_id;
    private $car_quant;
    private $car_preco;
    private $car_usu;

    public function __construct($car_id, $car_quant, $car_preco, $car_usu) {
        $this-> car_id= $car_id; 
        $this-> car_quant = $car_quant; 
        $this-> car_preco = $car_preco;
        $this-> car_usu = $car_usu; 
    }


public function getId(){
    return $this->car_id;
}

public function getQuant(){
    return $this->car_quant;
}

public function getPreco(){
    return $this->car_preco;
}

public function getUsu(){
    return $this->car_usu;
}
public function setId($car_id) {
    $this->car_id = $car_id;
}
public function setQuant($car_quant) {
    $this->car_quant = $car_quant;
}
public function setPreco($car_preco) {
    $this->car_preco = $car_preco;
}

public function setUsu($car_usu) {
    $this->car_usu = $car_usu;
}
}
?>