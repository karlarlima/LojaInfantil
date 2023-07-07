<?php	
class Mprod{
    private $prod_id;
    private $prod_nome;
    private $prod_quant;
    private $prod_preco;
    private $prod_desc;	
    private $prod_img1;	
    private $prod_img2;	
    private $prod_img3;
    private $prod_cat;
    private $prod_sub;

    public function __construct($prod_id, $prod_nome, $prod_quant, $prod_preco, $prod_desc, $prod_img1, $prod_img2, $prod_img3, $prod_cat, $prod_sub) {
        $this-> prod_id= $prod_id; 
        $this-> prod_nome = $prod_nome; 
        $this-> prod_quant = $prod_quant;
        $this-> prod_preco = $prod_preco; 
        $this-> prod_desc= $prod_desc; 
        $this-> prod_img1 = $prod_img1; 
        $this-> prod_img2 = $prod_img2;
        $this-> prod_img3 = $prod_img3;
        $this-> prod_cat = $prod_cat;
        $this-> prod_sub = $prod_sub;
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

public function getPreco(){
    return $this->prod_preco;
}
public function getDesc(){
    return $this->prod_desc;
}

public function getImg1(){
    return $this->prod_img1;
}

public function getImg2(){
    return $this->prod_img2;
}

public function getImg3(){
    return $this->prod_img3;
}

public function getCat(){
    return $this->prod_cat;
}

public function getSub(){
    return $this->prod_sub;
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

public function setPreco($prod_preco) {
    $this->prod_preco = $prod_preco;
}

public function setDesc($prod_desc) {
    $this->prod_desc = $prod_desc;
}

public function setImg1($prod_img1) {
    $this->prod_img1 = $prod_img1;
}
public function setImg2($prod_img2) {
    $this->prod_img2 = $prod_img2;
}

public function setImg3($prod_img3) {
    $this->prod_img3 = $prod_img3;
}

public function setCat($prod_cat) {
    $this->prod_cat = $prod_cat;
}

public function setSub($prod_sub) {
    $this->prod_sub = $prod_sub;
}

}
?>