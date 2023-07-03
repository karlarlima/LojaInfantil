<?php
class Duser
{
    public static function salvarUser($usu_pass, $usu_email)
    {
        require "conn.php";
        $conexao = Conn::criarInstancia();
        $sql = "INSERT INTO user (usu_id, usu_pass, usu_email) VALUES (NULL, ?, ?)";
        $stmt = $conexao->prepare($sql);

        try {
            $stmt->execute(array($usu_pass, $usu_email));
            header("location: ../View/user.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function carregarUser()
    {
        require "conn.php";
        $conexaoBD = conn::criarInstancia();
        $sql = "SELECT usu_id, usu_pass, usu_email FROM user;";

        try {
            $stmt = $conexaoBD->query($sql);
            return $stmt->fetchall();
        } catch (Exception $ex) {

            echo $ex;
            return 0;
        }
    }

    public static function excluirUser($usu_id)
    {
        require "conn.php";
        $conexaoBD = Conn::criarInstancia();
        $sql = "DELETE FROM user where usu_id=?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($usu_id));
            header("location: ../View/user.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function editarUser($usu_id, $usu_pass, $usu_email)
    {
        require "conn.php";
        $conexaoBD = Conn::criarInstancia();
        $sql = "UPDATE user set usu_pass = ?, usu_email = ? where usu_id= ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($usu_pass, $usu_email, $usu_id));
            header("location: ../View/user.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}
