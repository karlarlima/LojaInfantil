<?php
include"../Controller/Cprod.php";

if(filter_input(INPUT_GET, "acao")=="enviar" & filter_input(INPUT_GET, "tipo")=="cadastro"){
    if(filter_input(INPUT_POST, "prod_id") !=""){
    Cprod::editarProd($_POST);
 }  else{
    Cprod::salvarProd($_POST);
 }
}else if (filter_input(INPUT_GET, "acao")=="excluir" & filter_input(INPUT_GET, "tipo")=="clientes" & filter_input(INPUT_GET, "prod_id") !=0){
   Cprod::excluirProd (filter_input(INPUT_GET, "prod_id"));
}

?>