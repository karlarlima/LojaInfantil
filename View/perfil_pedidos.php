<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Meus Pedidos</title>
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
                <a href="perfil_meuPerfil.php" class="user"><i class="ri-user-3-fill"></i></a>
            </div>            
        </div>
        <div class="navbar">
            <ul>
              <li><a href="index.php" class="link">Início</a></li>
              <li><a href="roupas.php" class="link">Roupas</a></li>
              <li><a href="brinquedos.php" class="link">Brinquedos</a></li>
              <li><a href="enxoval.php" class="link">Enxoval</a></li>
              <li><a href="higiene.php" class="link">Higiene e Saúde</a></li>
            </ul>            
        </div>        
    </nav>
    <section class="container-perfil">
        <div class="perfil">
            <div class="container-perfil-left">
                <div class="perfil-options">
                    <a href="perfil_meuPerfil.php"><i class="ri-user-3-line"></i></a>
                    <a href="perfil_carrinho.php"><i class="ri-shopping-cart-2-line"></i></a>
                    <a href="perfil_pedidos.php" class="active"><i class="ri-truck-fill"></i></a>
                    <a href="perfil_favoritos.php"><i class="ri-heart-3-line"></i></a>
                </div>
                <a href="Vlogin.php"><i class="ri-logout-circle-line"></i></a>
            </div>
            <div class="container-perfil-right">
                <div class="meuPerfil-description">
                    <i class="ri-truck-fill"></i>
                    <div class="description">
                        <h2>Meus pedidos</h2>
                        <p>Confira o andamento dos seus pedidos</p>
                    </div>
                </div>
                <div class="meuPerfil-pedidos">
                    <h3>Prazo de Entrega - <span>17 dias úteis</span></h3>
                    <div class="product">
                        <div class="product-container">
                            <img src="../IMG/Roupas/22.png">
                            <div class="name-delete">
                                <h3>Casaco Infantil Roupa1</h3>
                                <div class="quantity-price">
                                    <span>2 unidade</span>
                                    <h3>R$ 100,00</h3>
                                </div>
                                <button>Cancelar Pedido</button>
                            </div>
                        </div>                        
                        <div class="details-pedido">
                            <div class="detail">
                                <h3>Pedido</h3>
                                <span>0012307642639</span>
                            </div>
                            <div class="detail">
                                <h3>Data de Compra</h3>
                                <span>07/07/2023 - 22h38</span>
                            </div>
                            <div class="detail">
                                <h3>Forma de Pagamento</h3>
                                <span>PIX</span>
                            </div>
                        </div>
                    </div>
                    <div class="status-container">
                        <h3>Status do pedido</h3>
                        <div class="status">
                            <div class="box active">
                                <i class="ri-check-line"></i>
                                <span>Recebimento do pedido</span>
                            </div>
                            <div class="box active">
                                <i class="ri-check-line"></i>
                                <span>Confirmação do pagamento</span>
                            </div>
                            <div class="box active">
                                <i class="ri-check-line"></i>
                                <span>Emissão da nota fiscal</span>
                            </div>
                            <div class="box">
                                <i class="ri-loader-line"></i>
                                <span>Transporte</span>
                            </div>
                            <div class="box">
                                <i class="ri-loader-line"></i>
                                <span>Entrega</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section class="container-informacoes">
        <div class="content">
            <ul>
                <li>
                    <i class="ri-truck-line"></i>
                    <div class="timeline">
                      <div class="ball"></div>
                      <div class="line"></div>
                    </div>
                    <h3>Frete</h3>
                    <p>Grátis para todos os estados do Brasil para compras acima de R$299.</p>
                </li>
                <li>
                    <i class="ri-bank-card-2-line"></i>
                    <div class="timeline">
                      <div class="ball"></div>
                      <div class="line"></div>
                    </div>
                    <h3>Parcelamento</h3>
                    <p>Até 10x no cartão. Parcela mínima de R$ 20,00.</p>
                </li>
                <li>
                    <i class="ri-refund-2-line"></i>
                    <div class="timeline">
                      <div class="ball"></div>
                      <div class="line"></div>
                    </div>
                    <h3>Trocas e Devoluções</h3>
                    <p>Até 7 dias para trocar ou devolver.</p>
                </li>
            </ul>
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