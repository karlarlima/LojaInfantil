<?php	
	
class Mfav{
    private $fav_id;
    private $fav_cli;
    private $fav_prod;

    public function __construct($fav_id, $fav_cli, $fav_prod) {
        $this-> fav_id= $fav_id; 
        $this-> fav_cli = $fav_cli; 
        $this-> fav_prod = $fav_prod; 
    }

public function getId(){
    return $this->fav_id;
}

public function getClient(){
    return $this->fav_cli;
}

public function getProd(){
    return $this->fav_prod;
}

public function setId($fav_id) {
    $this->fav_id = $fav_id;
}

public function setClient($fav_cli) {
    $this->fav_cli = $fav_cli;
}

public function setProd($fav_prod) {
    $this->fav_prod = $fav_prod;
}

}
?>