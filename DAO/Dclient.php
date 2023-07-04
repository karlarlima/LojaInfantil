<?php
class Dclient
{	
    public static function salvarClient ($cli_name, $cli_email, $cli_pass, $cli_usu, $cli_cell)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "INSERT INTO client (cli_id, cli_end, cli_name, cli_born, cli_email, cli_pass, cli_usu, cli_cpf, cli_cell) VALUES (NULL, NULL, ?, NULL, ?, ?, ?, NULL, ?)";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array( $cli_name,  $cli_email, $cli_pass, $cli_usu,  $cli_cell));
            header("location: ../View/Vcadastro.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function carregarClient()
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "SELECT * FROM client;";

        try {
            $stmt = $conexaoBD->query($sql);
            return $stmt->fetchall();
        } catch (Exception $ex) {

            echo $ex;
            return 0;
        }
    }

    public static function excluirClient($cli_id)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "DELETE FROM client where cli_id=?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($it_id));
            header("location: ../View/Vcadastro.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }


    
    public static function editarClient($cli_id, $cli_end, $cli_name, $cli_born, $cli_email, $cli_pass, $cli_usu, $cli_cpf, $cli_cell)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "UPDATE client set cli_end = ?, cli_name = ?, cli_born = ?, cli_email = ?, cli_pass = ?, cli_usu = ?, cli_cpf = ?, cli_cell = ? where cli_id= ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($cli_end, $cli_name, $cli_born, $cli_email, $cli_pass, $cli_usu, $cli_cpf, $cli_cell, $cli_id));
            header("location: ../View/Vcadastro.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}
