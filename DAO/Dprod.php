<?php
require_once "conexao.php";

class Dprod
{
    public static function salvarProd($prod_nome, $prod_quant, $prod_preco, $prod_desc, $prod_img1, $prod_img2, $prod_img3, $prod_cat, $prod_sub)
    {
        $conexaoBD = Conexao::criarInstancia();
        $sql = "INSERT INTO produto (prod_id, prod_nome, prod_quant, prod_preco, prod_desc, prod_img1, prod_img2, prod_img3, prod_cat, prod_sub) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($prod_nome, $prod_quant, $prod_preco, $prod_desc, $prod_img1, $prod_img2, $prod_img3, $prod_cat, $prod_sub));
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function carregarProd()
    {
        $conexaoBD = Conexao::criarInstancia();
        $sql = "SELECT produto.prod_id, produto.prod_nome, produto.prod_quant, produto.prod_preco, produto.prod_desc, produto.prod_img1, produto.prod_img2, produto.prod_img3, categoria.cat_categoria, subcategoria.sub_cat FROM produto INNER JOIN categoria ON produto.prod_cat = categoria.cat_id INNER JOIN subcategoria ON produto.prod_sub = subcategoria.sub_id";
        try {
            $stmt = $conexaoBD->query($sql);
            return $stmt->fetchall();
        } catch (Exception $ex) {

            echo $ex;
            return 0;
        }
    }

    public static function excluirProd($prod_id)
    {
        $conexaoBD = Conexao::criarInstancia();
        $sql = "DELETE FROM produto WHERE prod_id=?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($prod_id));
            header("location: ../View/produtos_adm.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }

    public static function editarProd($prod_id, $prod_nome, $prod_quant, $prod_preco, $prod_desc, $prod_img1, $prod_img2, $prod_img3, $prod_cat, $prod_sub)
    {
        $conexaoBD = Conexao::criarInstancia();
        $sql = "UPDATE produto SET prod_nome = ?, prod_quant = ?, prod_preco = ?, prod_desc = ?, prod_img1 = ?, prod_img2 = ?, prod_img3 = ?, prod_cat = ?, prod_sub = ? WHERE prod_id = ?";
        $stmt = $conexaoBD->prepare($sql);

        try {
            $stmt->execute(array($prod_nome, $prod_quant, $prod_preco, $prod_desc, $prod_img1, $prod_img2, $prod_img3, $prod_cat, $prod_sub, $prod_id));
            header("location: ../View/produtos_adm.php");
        } catch (Exception $ex) {
            echo $ex;
            return 0;
        }
    }
}
