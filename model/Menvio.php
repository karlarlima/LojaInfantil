<?php	

class Menvi{
    private $envi_id;
    private $envi_data;
    private $envi_preco;
    private $end_id;

    public function __construct($envi_id, $envi_data, $envi_preco, $end_id) {
        $this-> envi_id= $envi_id; 
        $this-> envi_data = $envi_data; 
        $this-> envi_preco = $envi_preco;
        $this-> end_id = $end_id; 
    }

public function getId(){
    return $this->envi_id;
}

public function getData(){
    return $this->envi_data;
}

public function getPreco(){
    return $this->envi_preco;
}

public function getEnd(){
    return $this->end_id;
}

public function setId($envi_id) {
    $this->envi_id = $envi_id;
}

public function setData($envi_data) {
    $this->envi_data = $envi_data;
}
public function setPreco($envi_preco) {
    $this->envi_preco = $envi_preco;
}

public function setEnd($end_id) {
    $this->end_id = $end_id;
}
}
?>