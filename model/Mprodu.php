<?php	

class Mprodu{
    private $prod_id;
    private $prod_nome;
    private $prod_quant;
    private $prod_valor;

    public function __construct($prod_id, $prod_nome, $prod_quant, $prod_valor) {
        $this-> prod_id= $prod_id; 
        $this-> prod_nome = $prod_nome; 
        $this-> prod_quant = $prod_quant;
        $this-> prod_valor = $prod_valor; 
    }

public function getId(){
    return $this->prod_id;
}

public function getNome(){
    return $this->prod_nome;
}

public function getQuant(){
    return $this->prod_quant;
}

public function getValor(){
    return $this->prod_valor;
}

public function setId($prod_id) {
    $this->prod_id = $prod_id;
}

public function setNome($prod_nome) {
    $this->prod_nome = $prod_nome;
}
public function setQuant($prod_quant) {
    $this->prod_quant = $prod_quant;
}

public function setValor($prod_valor) {
    $this->prod_valor = $prod_valor;
}
}
?>