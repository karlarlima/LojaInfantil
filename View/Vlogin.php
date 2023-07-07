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
    <title>Login</title>
    <link rel="shortcut icon" href="../IMG/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="container-top">
        <form class="container" autocomplete="off" method="POST">
            <?php
            $conn = Conexao::criarInstancia();
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            if (!empty($dados['enviar'])) {
                $sql = "SELECT * FROM client WHERE cli_email = :cli_email LIMIT 1";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':cli_email', $dados['cli_email'], PDO::PARAM_STR);
                $stmt->execute();

                if (($stmt) and ($stmt->rowCount() != 0)) {
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                   
                    
                    if ($row['cli_pass'] === $dados['cli_pass']) {
                        
                        if ($row['cli_tipo'] === "2") {

                            $_SESSION['cli_id'] = $row['cli_id'];
                            $_SESSION['cli_end'] = $row['cli_end'];
                            $_SESSION['cli_name'] = $row['cli_name'];
                            $_SESSION['cli_born'] = $row['cli_born'];
                            $_SESSION['cli_email'] = $row['cli_email'];
                            $_SESSION['cli_usu'] = $row['cli_usu'];
                            $_SESSION['cli_cpf'] = $row['cli_cpf'];
                            $_SESSION['cli_cell'] = $row['cli_cell'];
                            header("location: index.php");
                        } else {
                            $_SESSION['cli_id'] = $row['cli_id'];
                            $_SESSION['cli_end'] = $row['cli_end'];
                            $_SESSION['cli_name'] = $row['cli_name'];
                            $_SESSION['cli_born'] = $row['cli_born'];
                            $_SESSION['cli_email'] = $row['cli_email'];
                            $_SESSION['cli_usu'] = $row['cli_usu'];
                            $_SESSION['cli_cpf'] = $row['cli_cpf'];
                            $_SESSION['cli_cell'] = $row['cli_cell'];
                            header("location: inicio_adm.php");
                        }
                    } else {
                        $_SESSION['msg'] = "<p style = 'color: red'>" . "Erro: Usuário ou senha inválida!" . "</p>";
                    }
                } else {
                    $_SESSION['msg'] = "<p style = 'color: red'>" . "Erro: Usuário ou senha inválida!" . "<p>";
                }
            }
            ?>
            <div class="container-left">
                <a href="index.php"><img src="../IMG/logo.png" class="logo"></a>
            </div>
            <div class="container-right">
                <h1 class="title">Entre</h1>
                <div class="container-textbox">
                    
                    <input type="text" class="textbox" placeholder="Nome de usuário" required name="cli_email">
                    <input type="password" class="textbox" placeholder="Senha" required name="cli_pass">
                </div>
                <div>
                    <input type="submit" class="btn-entrar" value="Entrar" name="enviar">
                </div>
                <div class="container-or">
                    <div class="horizontal-line"></div>
                    <p class="or">OU</p>
                    <div class="horizontal-line"></div>
                </div>
                <div>
                    <div class="container-buttons">
                        <button class="btn-facebook">
                            <img src="../IMG/facebook.svg" class="logo-facebook">
                            Facebook
                        </button>
                        <button class="btn-google">
                            <img src="../IMG/google.svg" class="logo-google">
                            Google
                        </button>
                    </div>
                    <p class="create">
                        Não possui uma conta?
                        <a href="Vcadastro.php" class="create-account">
                            Criar conta</a>
                    </p>
                </div>

            </div>
        </form>
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