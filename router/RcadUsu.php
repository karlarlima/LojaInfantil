<?php 
include"../Controller/CclientU.php";
if(filter_input(INPUT_GET, "acao")=="enviar" & filter_input(INPUT_GET, "tipo")=="cadUsu"){
    if(filter_input(INPUT_POST, "cli_id") !=""){
    Cclient::editarClient($_POST);
 }  else{
    CclientU::salvarClientU($_POST);
 }}
?>