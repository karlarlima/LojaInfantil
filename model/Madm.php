<?php	
	
class Muser{
    private $usu_id;
    private $ad_name;
    private $ad_office;

    public function __construct($usu_id, $ad_name, $ad_office) {
        $this-> usu_id= $usu_id; 
        $this-> ad_name = $ad_name; 
        $this-> ad_office = $ad_office; 
    }

public function getId(){
    return $this->usu_id;
}

public function getName(){
    return $this->ad_name;
}

public function getOffice(){
    return $this->ad_office;
}

public function setId($usu_id) {
    $this->usu_id = $usu_id;
}

public function setName($ad_name) {
    $this->ad_name = $ad_name;
}

public function setOffice($ad_office) {
    $this->ad_office = $ad_office;
}

}
?>