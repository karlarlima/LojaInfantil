<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Carrinho</title>
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
                    <a href="perfil_carrinho.php" class="active"><i class="ri-shopping-cart-2-fill"></i></a>
                    <a href="perfil_pedidos.php"><i class="ri-truck-line"></i></a>
                    <a href="perfil_favoritos.php"><i class="ri-heart-3-line"></i></a>
                </div>
                <a href="Vlogin.php"><i class="ri-logout-circle-line"></i></a>
            </div>
            <div class="container-carrinho-right">
                <div class="header-finalizar">
                    <div class="nav-carrinho">
                        <a href="perfil_carrinho.php" class="item">Meu Carrinho
                        </a>
                        <a class="item" href="carrinho_compra.php">Continuar Compra
                        </a>
                        <a class="item active" href="#">Finalizar
                        </a>
                    </div>
                </div>
                <div class="body-container">
                    <div class="popup-finalizar">
                        <i class="ri-checkbox-circle-fill"></i>
                        <h3>Pedido realizado com sucesso!</h3>                        
                    </div>
                    
                    <div class="pix-container">
                        <h3>PIX</h3>
                        <img src="../IMG/pix.png" alt="">
                    </div>
                    <div class="total">
                        <span>Total a pagar</span>
                        <h3>R$ 100,00</h3>
                    </div>
                    <div class="container-btns">
                        <button>Copiar Código PIX</button>
                        <a href="perfil_pedidos.php"><i class="ri-arrow-left-s-line"></i>Ir para meus pedidos</a>
                    </div>
                </div>                    
            </div>           
        </div>        
      </section>
    <div class="overlay-excluir">
        <div class="popup-delete">
          <i class="ri-question-fill"></i>
          <h3>Deseja realmente remover o produto da sua lista de favoritos?</h3> 
          <div class="container-btns">
            <a onclick="close_popup_excluir();" href="#" class="btn_cancel">Cancelar</a>
            <a onclick="open_popup_salvar();" href="#" class="btn_continue">Remover</a>
          </div>
        </div>
    </div>
    <div onclick="close_popup_salvar();" class="overlay-salvar">
        <div class="popup">
            <i class="ri-checkbox-circle-fill"></i>
            <h3>Excluído</h3>
            <p>Produto excluído do seu carrinho!</p>
        </div>
    </div>
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

  <script>
    
    function open_popup_excluir(){
        const overlay_excluir = document.querySelector('.overlay-excluir');
        overlay_excluir.classList.toggle('active');
    }
    function close_popup_excluir(){
        const overlay_excluir = document.querySelector('.overlay-excluir');
        overlay_excluir.classList.remove('active');
    }
    function open_popup_salvar(){
        const overlay_salvar = document.querySelector('.overlay-salvar');
        overlay_salvar.classList.toggle('active');
        close_popup_excluir();
    }
    function close_popup_salvar(){
        const overlay_salvar = document.querySelector('.overlay-salvar');
        overlay_salvar.classList.remove('active');
    }
  </script>
</body>
</html>