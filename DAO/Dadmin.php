<?php
class Dadmin
{
    public static function salvarAdmin($ad_name, $ad_office)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "INSERT INTO client (ad_id, ad_name, ad_office) VALUES (NULL, ?, ?)";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($ad_name, $ad_office));
            header("location: ../View/emp.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function excluirCliente($ad_id)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "DELETE FROM client where ad_id=?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($ad_id));
            header("location: ../View/emp.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function editarClient($ad_id,	$ad_name, $ad_office)
    {
        require "conexao.php";
        $conexaoBD = Conexao::criarInstancia();
        $sql = "UPDATE client set ad_name = ?, ad_office = ?  where ad_id= ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($ad_name, $ad_office, $ad_id));
            header("location: ../View/emp.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function carregarClient()
    {
        require "conn.php";
        $conexaoBD = conn::criarInstancia();
        $sql = "SELECT ad_id, ad_name, ad_office FROM user;";

        try {
            $stmt = $conexaoBD->query($sql);
            return $stmt->fetchall();
        } catch (Exception $ex) {

            echo $ex;
            return 0;
        }
    }

}
