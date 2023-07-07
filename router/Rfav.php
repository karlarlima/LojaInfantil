<?php
include"../Controller/Cfav.php";

if(filter_input(INPUT_GET, "acao")=="favoritar"){
    if(filter_input(INPUT_GET, "prod_id") !=""){
    Cfav::editarFav($_POST);
 }  else{
    Cfav::salvarFav($_POST);
 }
}else if (filter_input(INPUT_GET, "acao")=="excluir" & filter_input(INPUT_GET, "tipo")=="fav" & filter_input(INPUT_GET, "cli_id") !=0){
   Cfav::excluirFav (filter_input(INPUT_GET, "cli_id"));
}


?>