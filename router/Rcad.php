<?php
include"../Controller/Cclient.php";

if(filter_input(INPUT_GET, "acao")=="enviar" & filter_input(INPUT_GET, "tipo")=="cadastro"){
    if(filter_input(INPUT_POST, "cli_id") !=""){
    Cclient::editarClient($_POST);
 }  else{
    Cclient::salvarClient($_POST);
 }
}else if (filter_input(INPUT_GET, "acao")=="excluir" & filter_input(INPUT_GET, "tipo")=="clientes" & filter_input(INPUT_GET, "cli_id") !=0){
   Cclient::excluirClient (filter_input(INPUT_GET, "cli_id"));
}
?>