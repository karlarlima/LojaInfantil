<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Product</title>
        <link rel='stylesheet' href='../CSS/style.css'>
        <link href='https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css' rel='stylesheet'>
        <script src='https://kit.fontawesome.com/b261d20ac0.js' crossorigin='anonymous'></script>
    </head>
    <body>

<?php 
require "../DAO/conexao.php";
if (isset($_GET['produto_id']) || isset($_GET['add_favorito'])) {
    $produto_id = $_GET['produto_id'];

    $sql = "SELECT produto.prod_id, 
    produto.prod_nome, 
    produto.prod_quant, 
    produto.prod_preco, 
    produto.prod_desc,
    produto.prod_img1, produto.prod_img2, produto.prod_img3,
    categoria.cat_categoria, subcategoria.sub_cat
    FROM produto 
    INNER JOIN categoria ON produto.prod_cat = categoria.cat_id 
    INNER JOIN subcategoria ON produto.prod_sub = subcategoria.sub_id
    WHERE prod_id = :produto_id";

    $instanciaPDO = conexao::criarInstancia();
    $stmt = $instanciaPDO->prepare($sql);
    $stmt->bindParam(':produto_id', $produto_id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo"
        <nav>
            <div class='container-navbar'>
                <a href='index.php'><img src='../IMG/logo 1.png' alt=''></a>
                <div class='search-bar'>
                    <i class='ri-search-line'></i>
                    <input type='search' name='' id='' placeholder='O que você procura?'>
                </div>
                <div class='button'>
                    <a href='perfil_favoritos.php' class='heart'><i class='ri-heart-3-fill'></i></a>
                    <a href='perfil_carrinho.php' class='bag'><i class='ri-shopping-cart-2-fill'></i><span>0</span></a>
                    <a href='Vlogin.php' class='btn'>Entrar</a>
                </div>            
            </div>
            <div class='navbar'>
                <ul>
                  <li><a href='index.php' class='link'>Início</a></li>
                  <li><a href='roupas.php' class='link'>Roupas</a></li>
                  <li><a href='brinquedos.php' class='link'>Brinquedos</a></li>
                  <li><a href='enxoval.php' class='link'>Enxoval</a></li>
                  <li><a href='higiene.php' class='link'>Higiene e Saúde</a></li>
                </ul>            
            </div>        
        </nav>
        <section>
            <div class='container-product flex'>
                <div class='left'>
                    <div class='option flex'>
                    <img src='../IMG/".$row['cat_categoria']."/".$row['prod_img1']."' onclick=\"img('../IMG/".$row['cat_categoria']."/".$row['prod_img1']."')\">
                    <img src='../IMG/".$row['cat_categoria']."/".$row['prod_img2']."' onclick=\"img('../IMG/".$row['cat_categoria']."/".$row['prod_img2']."')\">
                    <img src='../IMG/".$row['cat_categoria']."/".$row['prod_img3']."' onclick=\"img('../IMG/".$row['cat_categoria']."/".$row['prod_img3']."')\">
                    </div>
                    <div class='main_image'>
                        <img src='../IMG/".$row['cat_categoria']."/".$row['prod_img1']."' alt='' class='slide'>
                    </div>                
                </div>
                <div class='right'>
                    <h3>Conjunto Infantil Roupa 1</h3>
                    <div class='rating'>
                        <i class='ri-star-fill'></i>
                        <i class='ri-star-fill'></i>
                        <i class='ri-star-fill'></i>
                        <i class='ri-star-fill'></i>
                        <i class='ri-star-half-fill'></i>
                    </div>
                    <div class='price'>
                        <div class='pix'>
                            <i class='fa-brands fa-pix'></i>
                            <h4>R$".$row['prod_preco']." <span>no PIX</span></h4>
                        </div>                    
                        <div class='cartao'>
                            <i class='ri-bank-card-fill'></i>
                            <div class='price-number'>
                                <h4>R$".$row['prod_preco']." <span>no cartão</span></h4>
                                <span class='secondary-text'>2x de R$".$row['prod_preco'] ."</span>
                            </div>
                        </div>                    
                    </div>
                    <div class='tamanho'>
                        <h4>Tamanho</h4>
                        <div class='variacoes'>
                            <div class='item'>
                                <label for='pp'>PP</label>
                            </div>
                            <div class='item'>
                                <label for='p'>P</label>
                            </div>
                            <div class='item'>
                                <label for='m'>M</label>
                            </div>
                            <div class='item'>
                                <label for='g'>G</label>
                            </div>
                            <div class='item'>
                                <label for='gg'>GG</label>
                            </div>
                        </div>                    
                    </div>
                    <div class='wrapper'>
                        <h4>Quantidade</h4>
                        <div class='quantity'>
                            <div class='campo-minus'>
                                <span class='minus'>-</span>
                            </div>    
                            <div class='campo'>
                                <span class='num'>1</span>
                            </div>                               
                            <div class='campo-plus'>
                                <span class='plus'>+</span>
                            </div>                       
                        </div>                    
                    </div>
                    <div class='container-btns'>
                        <a class='btn-adicionar' href='#'><i class='ri-shopping-bag-line'></i>Adicionar</a>
                        <a class='heart' href='produto.php?add_favorito&produto_id=".$row['prod_id']. "name='add_favorito'><i class='ri-heart-3-line'></i></a>
                    </div>
                    <div onclick='close_popup_salvar();' class='overlay-salvar'>
                        <div class='popup'>
                            <i class='ri-checkbox-circle-fill'></i>
                            <h3>Adicionado aos favoritos</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class='descricao-container'>
                <h4>Descrição completa</h4>
                <div class='paragraph'>
                    <p>".$row['prod_desc']."</p>
                </div>            
            </div>
        </section>
        <section class='container-relacionados'>
            <h2>Produtos relacionados</h2>
            <div class='container-card'>
              <ul>
                <div class='card'>
                    <li>
                        <img src='../IMG/".$row['cat_categoria']."/".$row['prod_img1']."' alt=''>
                        <div class='card-content'>
                            <div class='namePrice'>
                                <h3>".$row['prod_nome']."</h3>
                                <span>R$".$row['prod_preco']."</span>
                            </div>
                            <div class='rating'>
                                <i class='ri-star-fill'></i>
                                <i class='ri-star-fill'></i>
                                <i class='ri-star-fill'></i>
                                <i class='ri-star-fill'></i>
                                <i class='ri-star-half-fill'></i>
                            </div>
                            <p>".$row['prod_desc']."</p>
                            <div class='container-btns'>
                                <a href='#' class='btn-add'>Adicionar<i class='ri-shopping-bag-2-fill'></i></a>
                            </div>
                        </div>
                    </li>
                </div>
                <div class='card'>
                    <li>
                        <img src='../IMG/Roupas/1.png' alt=''>
                        <div class='card-content'>
                            <div class='namePrice'>
                                <h3>Roupa1</h3>
                                <span>R$ 50,00</span>
                            </div>
                            <div class='rating'>
                                <i class='ri-star-fill'></i>
                                <i class='ri-star-fill'></i>
                                <i class='ri-star-fill'></i>
                                <i class='ri-star-fill'></i>
                                <i class='ri-star-half-fill'></i>
                            </div>
                            <p>Lorem ipsum dolor sit, amet consectetur elit nemo ut commodi. </p>
                            <div class='container-btns'>
                                <a href='#' class='btn-add'>Adicionar<i class='ri-shopping-bag-2-fill'></i></a>
                            </div>
                        </div>
                    </li>
                </div>
                <div class='card'>
                  <li>
                    <img src='../IMG/Roupas/1.png' alt=''>
                    <div class='card-content'>
                        <div class='namePrice'>
                            <h3>Roupa1</h3>
                            <span>R$ 50,00</span>
                        </div>
                        <div class='rating'>
                            <i class='ri-star-fill'></i>
                            <i class='ri-star-fill'></i>
                            <i class='ri-star-fill'></i>
                            <i class='ri-star-fill'></i>
                            <i class='ri-star-half-fill'></i>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur elit nemo ut commodi. </p>
                        <div class='container-btns'>
                            <a href='#' class='btn-add'>Adicionar<i class='ri-shopping-bag-2-fill'></i></a>
                        </div>
                    </div>
                  </li>
                </div>
              </ul>
            </div>       
        </section>
        <section class='container-informacoes-products'>
            <div class='content'>
                <ul>
                    <li>
                        <i class='ri-truck-line'></i>
                        <div class='timeline'>
                          <div class='ball'></div>
                          <div class='line'></div>
                        </div>
                        <h3>Frete</h3>
                        <p>Grátis para todos os estados do Brasil para compras acima de R$299.</p>
                    </li>
                    <li>
                        <i class='ri-bank-card-2-line'></i>
                        <div class='timeline'>
                          <div class='ball'></div>
                          <div class='line'></div>
                        </div>
                        <h3>Parcelamento</h3>
                        <p>Até 10x no cartão. Parcela mínima de R$ 20,00.</p>
                    </li>
                    <li>
                        <i class='ri-refund-2-line'></i>
                        <div class='timeline'>
                          <div class='ball'></div>
                          <div class='line'></div>
                        </div>
                        <h3>Trocas e Devoluções</h3>
                        <p>Até 7 dias para trocar ou devolver.</p>
                    </li>
                </ul>
            </div>       
        </section>
        <footer class='footer'>
            <div class='container-footer'>
                <div class='row'>
                    <div class='footer-col'>
                        <img src='../IMG/logo 2.png' alt=''>
                    </div>
                    <div class='footer-col'>
                        <h4>Veja Mais</h4>
                        <ul>
                            <li><a href='#'>Sobre Nós</a></li>
                            <li><a href='#'>Política de Privacidade</a></li>
                            <li><a href='#'>Como Comprar</a></li>
                            <li><a href='#'>Regras de Frete</a></li>
                            <li><a href='#'>Cód. de Defesa do Consumidor</a></li>
                            <li><a href='#'>Termos de Uso</a></li>
                        </ul>
                    </div>
                    <div class='footer-col'>
                        <h4>Presente da Cegonha</h4>
                        <ul>
                            <li><a href='#'>Cadastre-se</a></li>
                            <li><a href='#'>Login</a></li>
                            <li><a href='#'>Meus Pedidos</a></li>
                            <li><a href='#'>Favoritos</a></li>
                        </ul>
                    </div>
                    <div class='footer-col'>
                        <h4>Redes Sociais</h4>
                        <div class='social-links'>
                            <a href='#'><i class='ri-instagram-fill'></i></a>
                            <a href='#'><i class='ri-twitter-fill'></i></a>
                            <a href='#'><i class='ri-facebook-circle-fill'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            function img(anything) {
              document.querySelector('.slide').src = anything;
            }
            const plus = document.querySelector('.plus'),
            minus = document.querySelector('.minus'),
            num = document.querySelector('.num');
            let a = 1;
            plus.addEventListener('click', ()=>{
            a++;
            a = (a < 10) ? a : a;
            num.innerText = a;
            });
            minus.addEventListener('click', ()=>{
            if(a > 1){
                a--;
                a = (a < 10) ? a : a;
                num.innerText = a;
            }
            });
            function open_popup(){
                const overlay = document.querySelector('.overlay');
                overlay.classList.toggle('active');
            }
            function close_popup(){
                const overlay = document.querySelector('.overlay');
                overlay.classList.remove('active');
            }
            function open_popup_salvar(){
                const overlay_salvar = document.querySelector('.overlay-salvar');
                overlay_salvar.classList.toggle('active');
                close_popup();
            }
            function close_popup_salvar(){
                const overlay_salvar = document.querySelector('.overlay-salvar');
                overlay_salvar.classList.remove('active');
            }
            function open_popup_excluir(){
                const overlay_excluir = document.querySelector('.overlay-excluir');
                overlay_excluir.classList.toggle('active');
            }
            function close_popup_excluir(){
                const overlay_excluir = document.querySelector('.overlay-excluir');
                overlay_excluir.classList.remove('active');
            }        
        </script>
    ";}}

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

            echo "";
          } else {
            //echo "O produto já está nos favoritos!";(colocar po-up aqui também)
          }
        }
      } 
}

?>
</body>
    </html>