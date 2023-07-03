<?php	

class Mcar{
    private $car_id;
    private $car_nome;
    private $prod_quant;
    private $car_valor;

    public function __construct($car_id, $car_nome, $prod_quant, $car_valor) {
        $this-> car_id= $car_id; 
        $this-> car_nome = $car_nome; 
        $this-> prod_quant = $prod_quant;
        $this-> car_valor = $car_valor; 
    }


public function getNome(){
    return $this->car_nome;
}

public function getQuant(){
    return $this->prod_quant;
}

public function getId(){
    return $this->car_id;
}

public function getValor(){
    return $this->car_valor;
}
public function setNome($car_nome) {
    $this->car_nome = $car_nome;
}
public function setQuant($prod_quant) {
    $this->prod_quant = $prod_quant;
}
public function setId($car_id) {
    $this->car_id = $car_id;
}

public function setValor($car_valor) {
    $this->car_valor = $car_valor;
}
}
?>