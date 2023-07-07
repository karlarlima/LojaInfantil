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
            header("location: ../View/perfil_meuPerfil.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
}
}
