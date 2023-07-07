<?php
class Dclient
{	
    public static function salvarClient($cli_end, $cli_name, $cli_born, $cli_email, $cli_pass, $cli_usu, $cli_cpf, $cli_cell, $cli_tipo)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "INSERT INTO client (cli_id ,cli_end, cli_name, cli_born, cli_email, cli_pass, cli_usu, cli_cpf, cli_cell, cli_tipo) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($cli_end, $cli_name, $cli_born, $cli_email, $cli_pass, $cli_usu, $cli_cpf, $cli_cell, $cli_tipo));
            header("location: ../View/usuarios_adm.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
}

    public static function carregarClient()
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "SELECT * FROM client ";

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
            $stmt->execute(array($cli_id));
            header("location: ../View/usuarios_adm.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }


    
    public static function editarClient($cli_id, $cli_end, $cli_name, $cli_born, $cli_email, $cli_pass, $cli_usu, $cli_cpf, $cli_cell, $cli_tipo)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "UPDATE client set cli_end = ?, cli_name = ?, cli_born = ?, cli_email = ?, cli_pass = ?, cli_usu = ?, cli_cpf = ?, cli_cell = ?, cli_tipo = ? where cli_id= ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($cli_end, $cli_name, $cli_born, $cli_email, $cli_pass, $cli_usu, $cli_cpf, $cli_cell, $cli_tipo, $cli_id));
            header("location: ../View/Vcadastro.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}
