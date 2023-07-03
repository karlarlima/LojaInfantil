<?php	
	
class Muser{
    private $ad_usu;
    private $ad_name;
    private $ad_office;

    public function __construct($ad_usu, $ad_name, $ad_office) {
        $this-> ad_usu= $ad_usu; 
        $this-> ad_name = $ad_name; 
        $this-> ad_office = $ad_office; 
    }

public function getId(){
    return $this->ad_usu;
}

public function getName(){
    return $this->ad_name;
}

public function getOffice(){
    return $this->ad_office;
}

public function setId($ad_usu) {
    $this->ad_usu = $ad_usu;
}

public function setName($ad_name) {
    $this->ad_name = $ad_name;
}

public function setOffice($ad_office) {
    $this->ad_office = $ad_office;
}

}
?>