<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="../IMG/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="container-top">
        <div class="container">
            <div class="container-left">
                <img src="../IMG/logo.png" class="logo">
            </div>



            <form class="container-right" autocomplete="off" method="POST" action="../Controller/Rcad.php?acao=enviar&tipo=cadastro">

                <h1 class="title">Cadastro</h1>
                <div class="container-textbox">
                    <input type="hidden" class="textbox" required name="cli_id">
                    <input type="text" class="textbox" placeholder="Nome completo" required name="cli_name">
                    <input type="text" class="textbox" placeholder="E-mail" required name="cli_email">
                    <input type="text" class="textbox" placeholder="Telefone" required name="cli_cell">
                    <input type="text" class="textbox" placeholder="Nome de usuário" required name="cli_usu">
                    <input type="hidden" class="textbox" required name="cli_cpf">
                    <input type="hidden" class="textbox" required name="cli_born">
                    <input type="hidden" class="textbox" required name="cli_end">
                </div>
                <div class="container-password">
                    <input type="password" class="textbox-password" placeholder="Senha" required>
                    <input type="password" class="textbox-password" placeholder="Confirme sua senha" required name="cli_pass">
                </div>
                <input type="submit" class="btn-cadastro" value="Cadastre-se" name="enviar">
                <p class="login">Já possui uma conta? <a href="Vlogin.html" class="login-account">Entrar</a></p>
            </form>



        </div>
    </div>
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