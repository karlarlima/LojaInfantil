<?php
session_start();
ob_start();
include '../DAO/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brinquedos</title>
    <link rel="shortcut icon" href="../IMG/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container-navbar">
            <a href="index.php"><img src="../IMG/logo 1.png" alt=""></a>
            <div class="search-bar">
                <i class="ri-search-line"></i>
                <input type="search" name="" id="" placeholder="O que você procura?">
            </div>
            <div class="button">
                <a href="perfil_favoritos.php" class="heart"><i class="ri-heart-3-fill"></i></a>
                <a href="perfil_carrinho.php" class="bag"><i class="ri-shopping-cart-2-fill"></i><span>0</span></a>
                <a href="Vlogin.php" class="btn">Entrar</a>
            </div>            
        </div>
        <div class="navbar">
            <ul>
              <li><a href="index.php" class="link">Início</a></li>
              <li><a href="roupas.php" class="link">Roupas</a></li>
              <li><a href="brinquedos.php" class="link active">Brinquedos</a></li>
              <li><a href="enxoval.php" class="link">Enxoval</a></li>
              <li><a href="higiene.php" class="link">Higiene e Saúde</a></li>
            </ul>            
        </div>        
    </nav>
    <section class="container-body">
      <div class="filter-container">
        <span>Início <h5>/ Brinquedos</h5></span>
        <form action="#">
          <div class="filter-price">
            <h5>Busque por preço</h5>
            <div class="price">
              <input type="number" placeholder="R$30">
              <input type="number" placeholder="R$200">
              <input type="submit" value="OK">
            </div>            
            <div class="slider">
              <div class="progress"></div>
            </div>
          </div>
          <div class="categorias-container">
            <h5>Categorias</h5>
            <div class="categorias">
              <input type="checkbox" id="bicicletas" name="bicicletas">
              <label for="bicicletas">Bicicletas</label>
            </div>
            <div class="categorias">
              <input type="checkbox" id="bonecas" name="bonecas">
              <label for="bonecas">Bonecas</label>
            </div>            
            <div class="categorias">
                <input type="checkbox" id="instrumentos" name="instrumentos">
                <label for="instrumentos">Instrumentos Musicais</label>
              </div>
            <div class="categorias">
              <input type="checkbox" id="jogos" name="jogos">
              <label for="jogos">Jogos</label>
            </div>
            <div class="categorias">
              <input type="checkbox" id="pelucia" name="pelucia">
              <label for="pelucia">Pelúcias</label>
            </div>
          </div>
          <div class="faixa-container">
            <h5>Faixa Etária</h5>
            <div class="faixa">
              <input type="checkbox" id="1" name="1">
              <label for="1">Até 1 ano</label>
            </div>
            <div class="faixa">
              <input type="checkbox" id="2" name="2">
              <label for="2">1 a 2 anos</label>
            </div>
            <div class="faixa">
              <input type="checkbox" id="4" name="4">
              <label for="4">3 a 4 anos</label>
            </div>
            <div class="faixa">
              <input type="checkbox" id="6" name="6">
              <label for="6">5 a 6 anos</label>
            </div>
            <div class="faixa">
              <input type="checkbox" id="8" name="8">
              <label for="8">7 a 8 anos</label>
            </div>
            <div class="faixa">
              <input type="checkbox" id="10" name="10">
              <label for="10">9 a 10 anos</label>
            </div>
            <div class="faixa">
              <input type="checkbox" id="12" name="12">
              <label for="12">11 a 12 anos</label>
            </div>
          </div>
          
        </form>
      </div>
      <div class="container-products">
        <div class="container-card">
          <ul>
          <?php

$sql = "select * from produto where prod_cat = 2";
$instanciaPDO = conexao::criarInstancia();
$resultado = $instanciaPDO->query($sql);

if ($resultado->rowCount() > 0) {
  while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo "
<div class='card'>
<li>
<a href='produto.php?produto_id=".$row['prod_id']."'><img src='../IMG/Brinquedos/" . $row['prod_img1'] . "' alt=''></a>
<div class='card-content'>
  <div class='namePrice'>
      <h3>" . $row['prod_nome'] . "</h3>
      <span>R$ " . $row['prod_preco'] . "</span>
  </div>
  <div class='rating'>
      <i class='ri-star-fill'></i>
      <i class='ri-star-fill'></i>
      <i class='ri-star-fill'></i>
      <i class='ri-star-fill'></i>
      <i class='ri-star-half-fill'></i>
  </div>
  <p>" . $row['prod_desc'] . "<br></p>
  <div class='container-btns'>
      <a href='brinquedos.php?add_favorito&produto_id=" . $row['prod_id'] . "' class='btn-add' name='add_favorito'>Favoritar<i class='ri-shopping-bag-2-fill'></i></a>
  </div>
</div>
</a>  
</li>
</div>
";
  }
}
if (isset($_GET['add_favorito'])) {
  // Verificar se o usuário está autenticado
  if (!isset($_SESSION['cli_id'])) {
    // Usuário não autenticado, redirecionar para a página de login ou exibir mensagem de erro
    header("Location: Vlogin.php");
    exit();
  }else {
   
    $produto_id = $_GET['produto_id'];
    $user_id = $_SESSION['cli_id'];

    $sql = "SELECT fav_id FROM favoritos WHERE fav_cli = :cli_id AND fav_prod = :prod_id";
    $stmt = $instanciaPDO->prepare($sql);
    $stmt->bindParam(':cli_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':prod_id', $produto_id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
      // Adicionar o produto aos favoritos do usuário
      $sql = "INSERT INTO favoritos (fav_cli, fav_prod) VALUES (:cli_id, :prod_id)";
      $stmt = $instanciaPDO->prepare($sql);
      $stmt->bindParam(':cli_id', $user_id, PDO::PARAM_INT);
      $stmt->bindParam(':prod_id', $produto_id, PDO::PARAM_INT);
      $stmt->execute();

      //echo "Produto adicionado aos favoritos!";(colocar aqui um pop-up)
    } else {
      //echo "O produto já está nos favoritos!";(colocar po-up aqui também)
    }
  }
} 
?>
          </ul>
        </div>
        <div class="navigation-pages">
          <a href="#" class="page-navigator prev"><i class="ri-arrow-left-s-line"></i></a>
          <a href="#" class="active page-number">1</a>
          <a href="#" class="page-number">2</a>
          <a href="#" class="page-number">3</a>
          <a href="#" class="page-navigator next"><i class="ri-arrow-right-s-line"></i></a>
        </div>
      </div>
    </section>
    <footer class="footer">
        <div class="container-footer">
            <div class="row">
                <div class="footer-col">
                    <img src="../IMG/logo 2.png" alt="">
                </div>
                <div class="footer-col">
                    <h4>Veja Mais</h4>
                    <ul>
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                        <li><a href="#">Como Comprar</a></li>
                        <li><a href="#">Regras de Frete</a></li>
                        <li><a href="#">Cód. de Defesa do Consumidor</a></li>
                        <li><a href="#">Termos de Uso</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Presente da Cegonha</h4>
                    <ul>
                        <li><a href="#">Cadastre-se</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Meus Pedidos</a></li>
                        <li><a href="#">Favoritos</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Redes Sociais</h4>
                    <div class="social-links">
                        <a href="#"><i class="ri-instagram-fill"></i></a>
                        <a href="#"><i class="ri-twitter-fill"></i></a>
                        <a href="#"><i class="ri-facebook-circle-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>