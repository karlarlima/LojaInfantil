<?php
include "../Model/Mclient.php";
include "../DAO/Dclient.php";

class Cclient{

        public static function salvarClient($dadosCliente){
            $client = new Mclient($dadosCliente['cli_id'], $dadosCliente['cli_end'], $dadosCliente['cli_name'], $dadosCliente['cli_born'], $dadosCliente['cli_email'], $dadosCliente['cli_pass'], 
            $dadosCliente['cli_usu'], $dadosCliente['cli_cpf'], $dadosCliente['cli_cell']);
            Dclient::salvarClient($client->getName(), $client->getEmail(), $client->getPass(), $client->getUsu(), $client->getCell());
            $client = null;
        }

        public static function retornarClient(){
            $client = Dclient::carregarClient();
            return $client;

    }

    public static function excluirClient($cli_id){
        Dclient::excluirClient($cli_id);
    }
  
    public static function editarClient($dadosCliente){
      $client = new Mclient($dadosCliente['cli_id'], $dadosCliente['cli_end'], $dadosCliente['cli_name'], $dadosCliente['cli_born'], $dadosCliente['cli_email'], $dadosCliente['cli_pass'], 
      $dadosCliente['cli_usu'], $dadosCliente['cli_cpf'], $dadosCliente['cli_cell']);
      Dclient::editarClient($client->getId(), $client->getName(), $client->getBorn(), $client->getEmail(), $client->getPass(), $client->getUsu(), $client->getCpf(), $client->getCell() ,$client->getEnd(), $client->getName(), $client->getBorn(), $client->getEmail(), $client->getPass(), $client->getUsu(), $client->getCpf(), $client->getCell());
      $client = null;
      header("location: ../View/Vcadastro.php");
  }
}
?>