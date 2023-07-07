<?php
class Dfav
{
    public static function salvarFav($ad_name, $ad_office)
    {
        require "conexao.php";
        $conexaoBD = conexao::criarInstancia();
        $sql = "INSERT INTO favoritos (ad_id, ad_name, ad_office) VALUES (NULL, ?, ?)";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($ad_name, $ad_office));
            header("location: ../View/emp.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function excluirFav($ad_id)
    {
        require "conexao.php";
        $conexaoBD = conexao::criarInstancia();
        $sql = "DELETE FROM favoritos where ad_id=?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($ad_id));
            header("location: ../View/emp.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function editarFav($ad_id,	$ad_name, $ad_office)
    {
        require "conexao.php";
        $conexaoBD = conexao::criarInstancia();
        $sql = "UPDATE favoritos set ad_name = ?, ad_office = ?  where ad_id= ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($ad_name, $ad_office, $ad_id));
            header("location: ../View/emp.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function carregarFav()
    {
        require "conn.php";
        $conexaoBD = conexao::criarInstancia();
        $sql = "SELECT ad_id, ad_name, ad_office FROM favoritos;";

        try {
            $stmt = $conexaoBD->query($sql);
            return $stmt->fetchall();
        } catch (Exception $ex) {

            echo $ex;
            return 0;
        }
    }

}
