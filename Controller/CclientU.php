<?php
include "../Model/Mclient.php";
include "../DAO/Dclient.php";

class CclientU{

        public static function salvarClientU($dadosCliente){
            $client = new Mclient($dadosCliente['cli_id'], $dadosCliente['cli_end'], $dadosCliente['cli_name'], $dadosCliente['cli_born'], $dadosCliente['cli_email'], $dadosCliente['cli_pass'], 
            $dadosCliente['cli_usu'], $dadosCliente['cli_cpf'], $dadosCliente['cli_cell'], $dadosCliente['cli_tipo']);
            Dclient::salvarClient($client->getEnd(), $client->getName(), $client->getBorn(), $client->getEmail(), $client->getPass(), 
            $client->getUsu(), $client->getCpf(), $client->getCell(), $client->getTipo());
            $client = null;
            header("location: ../View/Vlogin.php");
        }
}
?>