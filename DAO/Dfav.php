<?php
class Dfav
{
    public static function salvaFav($fav_cli, $fav_prod)
    {
        require "conexao.php";
        $conexaoBD = conexao::criarInstancia();
        $sql = "INSERT INTO favoritos (fav_id, fav_cli, fav_prod) VALUES (NULL, ?, ?)";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($fav_cli, $fav_prod));
            header("location: ../View/index.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function excluirFav($fav_id)
    {
        require "conexao.php";
        $conexaoBD = conexao::criarInstancia();
        $sql = "DELETE FROM favoritos where fav_id=?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($fav_id));
            header("location: ../View/index.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function editarFav($fav_id,	$fav_cli, $fav_prod)
    {
        require "conexao.php";
        $conexaoBD = conexao::criarInstancia();
        $sql = "UPDATE favoritos set fav_cli = ?, fav_prod = ?  where fav_id= ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($fav_cli, $fav_prod, $fav_id));
            header("location: ../View/index.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function carregarFav()
    {
        require "conexao.php";
        $conexaoBD = conexao::criarInstancia();
        $sql = "SELECT fav_id, fav_cli, fav_prod FROM favoritos;";

        try {
            $stmt = $conexaoBD->query($sql);
            return $stmt->fetchall();
        } catch (Exception $ex) {

            echo $ex;
            return 0;
        }
    }

}
