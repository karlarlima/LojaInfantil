
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
    <title>Início</title>
    <link rel="shortcut icon" href="../IMG/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
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
                <a href="Vlogin.php" class="btn"><?php if(isset($_SESSION['cli_id'])){
                  echo $_SESSION['cli_name'];
                }else{
                  echo "Logar";
                };
                
                ?></a>
            </div>            
        </div>
        <div class="navbar">
            <ul>
                <li><a href="index.php" class="link active">Início</a></li>
                <li><a href="roupas.php" class="link">Roupas</a></li>
                <li><a href="brinquedos.php" class="link">Brinquedos</a></li>
                <li><a href="enxoval.php" class="link">Enxoval</a></li>
                <li><a href="higiene.php" class="link">Higiene e Saúde</a></li>
            </ul>            
        </div>        
    </nav>
    <section class="swiper mySwiper slide">       
        <div class="swiper-wrapper slides">            
            <a href="#" class="swiper-slide image" id="active">
                <img src="../IMG/Banner 1.png" alt="">
            </a>
            <a href="#" class="swiper-slide image">
                <img src="../IMG/Banner 2.png" alt="">
            </a>
            <a href="#" class="swiper-slide image">
                <img src="../IMG/Banner 3.png" alt="">
            </a>
        </div>
    </section>
    <section class="container-maisVendidos">
    <h2>Mais Vendidos</h2>
      <div class="container-card">
        <ul>
          <div class="card">
            <li>
              <a href="">
                <img src="../IMG/Roupas/1.png" alt="">
                <div class="card-content">
                  <div class="namePrice">
                    <h3>Roupa1</h3>
                    <span>R$ 50,00</span>
                  </div>
                  <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                  </div>
                  <p>Lorem ipsum dolor sit, amet consectetur elit nemo ut commodi. </p>
                  <div class="container-btns">
                    <a href="#" class="btn-add">Adicionar<i class="ri-shopping-bag-2-fill"></i></a>
                  </div>
                </div>
              </a>
            </li>
          </div>
          <div class="card">
            <li>
              <a href="">
                <img src="../IMG/Roupas/4.png" alt="">
                <div class="card-content">
                  <div class="namePrice">
                    <h3>Roupa1</h3>
                    <span>R$ 50,00</span>
                  </div>
                  <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                  </div>
                  <p>Lorem ipsum dolor sit, amet consectetur elit nemo ut commodi. </p>
                  <div class="container-btns">
                    <a href="#" class="btn-add">Adicionar<i class="ri-shopping-bag-2-fill"></i></a>
                  </div>
                </div>
              </a>
            </li>
          </div>
          <div class="card">
            <li>
              <a href="">
                <img src="../IMG/Roupas/7.png" alt="">
                <div class="card-content">
                  <div class="namePrice">
                    <h3>Roupa1</h3>
                    <span>R$ 50,00</span>
                  </div>
                  <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                  </div>
                  <p>Lorem ipsum dolor sit, amet consectetur elit nemo ut commodi. </p>
                  <div class="container-btns">
                    <a href="#" class="btn-add">Adicionar<i class="ri-shopping-bag-2-fill"></i></a>
                  </div>
                </div>
              </a>
            </li>
          </div>
        </ul>
      </div>      
    </section>
    <section class="container-oferta">
        <h2>Oferta Relâmpago - 50% off</h2>
        <div class="container-card">
          <ul>
            <div class="card">
              <li>
                <a href="">
                  <img src="../IMG/Roupas/19.png" alt="">
                  <div class="card-content">
                    <div class="namePrice">
                      <h3>Roupa1</h3>
                      <span>R$ 50,00</span>
                    </div>
                    <div class="rating">
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-half-fill"></i>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur elit nemo ut commodi. </p>
                    <div class="container-btns">
                      <a href="#" class="btn-add">Adicionar<i class="ri-shopping-bag-2-fill"></i></a>
                    </div>
                  </div>
                </a>
              </li>
            </div>
            <div class="card">
              <li>
                <a href="">
                  <img src="../IMG/Roupas/22.png" alt="">
                  <div class="card-content">
                    <div class="namePrice">
                      <h3>Roupa1</h3>
                      <span>R$ 50,00</span>
                    </div>
                    <div class="rating">
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-half-fill"></i>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur elit nemo ut commodi. </p>
                    <div class="container-btns">
                      <a href="#" class="btn-add">Adicionar<i class="ri-shopping-bag-2-fill"></i></a>
                    </div>
                  </div>
                </a>
              </li>
            </div>
            <div class="card">
              <li>
                <a href="">
                  <img src="../IMG/Roupas/25.png" alt="">
                  <div class="card-content">
                    <div class="namePrice">
                      <h3>Roupa1</h3>
                      <span>R$ 50,00</span>
                    </div>
                    <div class="rating">
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-half-fill"></i>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur elit nemo ut commodi. </p>
                    <div class="container-btns">
                      <a href="#" class="btn-add">Adicionar<i class="ri-shopping-bag-2-fill"></i></a>
                    </div>
                  </div>
                </a>
              </li>
            </div>
          </ul>
        </div>       
    </section>
    <section class="container-sobreNos">
        <h2>Sobre Nós</h2>
        <div class="content">
            <p>Comprar roupa infantil para os pequenos, pode parecer uma difícil tarefa para os papais de primeira viagem, mas em nossa loja virtual Presente da Cegonha, você encontra as melhores opções de peças infantis, com muito estilo, charme e qualidade! 
            Além do mais, ao comprar conosco, você receberá seus pedidos no conforto da sua casa, com entregas rápidas e garantidas, pagando por um preço justo e acessível!</p>
            <img src="../IMG/sobre.png" alt="">
        </div>       
    </section>
    <section class="container-informacoes-index">
        <div class="content">
            <ul>
                <li>
                    <i class="ri-truck-line"></i>
                    <div class="ball"></div>
                    <h3>Frete</h3>
                    <p>Grátis para todos os estados do Brasil para compras acima de R$299.</p>
                </li>
                <li>
                    <i class="ri-bank-card-2-line"></i>
                    <div class="ball"></div>
                    <h3>Parcelamento</h3>
                    <p>Até 10x no cartão. Parcela mínima de R$ 20,00.</p>
                </li>
                <li>
                    <i class="ri-refund-2-line"></i>
                    <div class="ball"></div>
                    <h3>Trocas e Devoluções</h3>
                    <p>Até 7 dias para trocar ou devolver.</p>
                </li>
            </ul>
        </div>       
    </section>
    <footer class="footer-index">
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
    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  </script>
</body>
</html>