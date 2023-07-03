<?php	

class Menvi{
    private $envi_id;
    private $envi_data;
    private $envi_preco;
    private $env_end;

    public function __construct($envi_id, $envi_data, $envi_preco, $env_end) {
        $this-> envi_id= $envi_id; 
        $this-> envi_data = $envi_data; 
        $this-> envi_preco = $envi_preco;
        $this-> env_end = $env_end; 
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
    return $this->env_end;
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

public function setEnd($env_end) {
    $this->env_end = $env_end;
}
}
?>