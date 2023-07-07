<?php
include "../Model/Mfav.php";
include "../DAO/Dfav.php";

class Cfav{

        public static function salvarFav($dadosFav){
            $fav = new Mfav($dadosFav['fav_id'], $dadosFav['fav_cli'], $dadosFav['fav_prod']);
            Dfav::salvarFav($fav->getClient(), $fav->getProd());
            $fav = null;
            header("location: ../View/index.php");
        }

        public static function retornarFav(){
            $fav = Dfav::carregarFav();
            return $fav;

    }

    public static function excluirFav($fav_id){
        Dfav::excluirFav($fav_id);
        header("location: ../View/index.php");
    }
  
    public static function editarFav($dadosFav){
      $fav = new Mfav($dadosFav['cli_id'], $dadosFav['cli_end'], $dadosFav['cli_name']);
      Dfav::editarFav($fav->getId(), $fav->getClient(), $fav->getProd());
      $fav = null;
      header("location: ../View/index.php");
  }
}
?>