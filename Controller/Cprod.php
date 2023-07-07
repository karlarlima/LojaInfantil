
<?php
include "../Model/Mprod.php";
include "../DAO/Dprod.php";

class Cprod{
    public static function salvarProd($dadosProd){
        $prod = new Mprod($dadosProd['prod_id'], $dadosProd['prod_nome'], $dadosProd['prod_quant'], $dadosProd['prod_preco'], $dadosProd['prod_desc'], $dadosProd['prod_img1'], $dadosProd['prod_img2'], $dadosProd['prod_img3'], $dadosProd['prod_cat'],  $dadosProd['prod_sub']);
        Dprod::salvarProd($prod->getNome(), $prod->getQuant(), $prod->getPreco(), $prod->getDesc(), $prod->getImg1(), $prod->getImg2(), $prod->getImg3(), $prod->getCat(), $prod->getSub());
        $prod = null;
        header("location: ../View/produtos_adm.php");
    }

    public static function retornarProd(){
        $produtos = Dprod::carregarProd();
        return $produtos;
    }

    public static function excluirProd($prod_id){
        Dprod::excluirProd($prod_id);
        header("location: ../View/produtos_adm.php");
    }
  
    public static function editarProd($dadosProd){
        $prod = new Mprod($dadosProd['prod_id'], $dadosProd['prod_nome'], $dadosProd['prod_quant'], $dadosProd['prod_preco'], $dadosProd['prod_desc'], $dadosProd['prod_img1'], $dadosProd['prod_img2'], $dadosProd['prod_img3'], $dadosProd['prod_cat'],  $dadosProd['prod_sub']);
        Dprod::editarProd($prod->getId(), $prod->getNome(), $prod->getQuant(), $prod->getPreco(), $prod->getDesc(), $prod->getImg1(), $prod->getImg2(), $prod->getImg3(),$prod->getCat(), $prod->getSub());
        $prod = null;
    }
}
?>