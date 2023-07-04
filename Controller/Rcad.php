<?php
include"../Controller/Cclient.php";

if(filter_input(INPUT_GET, "acao")=="enviar" & filter_input(INPUT_GET, "tipo")=="cadastro"){
    if(filter_input(INPUT_POST, "cli_id") !=""){
    Cclient::editarClient($_POST);
 }  else{
    Cclient::salvarClient($_POST);
 }
}

?>