<?php 
session_start();
ob_start();
include'../DAO/conexao.php';

if((!isset($_SESSION['cli_id'])) and (!isset($_SESSION['cli_email'])) and $_SESSION['cli_tipo'] == 1){
   $_SESSION['msg'] = "<p style = 'color: red'>"."Erro: Precisa ser administrador para ter acesso a essa página"."<p>";
   header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre</title>
   <link rel="shortcut icon" href="../IMG/logo.png" type="image/x-icon" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="stylesheet" href="../css/style_adm.css">

</head>

<body>

   <header class="header">

      <section class="flex">
         <br>
         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="Vlogin.php">
               <div id="user-btn" class="fas fa-user"></div>
            </a>
            <div id="toggle-btn" class="fa fa-adjust"></div>
         </div>

      </section>

   </header>

   <div class="divMenu">

      <div class="adm">
         <img src="../IMG/adm.png" class="adm_imagem" alt="">
         <h3 class="cl_adm"><?php echo $_SESSION['cli_name']; ?></h3>
      </div>

      <nav class="navbar">
         <a href="inicio_adm.php"><i class="fas fa-home"></i><span>Início</span></a>
         <a href="usuarios_adm.php"><i class="	fa fa-address-book"></i><span>Usuários</span></a>
         <a href="produtos_adm.php"><i class="fas fa-shirt"></i><span>Produtos</span></a>
         <a href="sobre_adm.php"><i class="fa fa-info-circle"></i><span>Sobre nós</span></a>
         <a href="sair.php"><i class="fas fa-sign-out-alt"></i><span>Sair</span></a>

      </nav>

   </div>

   <div class="container">
      <h1>Bem-vindo! <?php echo $_SESSION['cli_name']; ?></h1>
      <p>Seja bem-vindo ao nosso sistema. Estamos felizes em tê-lo(a) aqui.</p>
      <img src="../IMG/principal.png" class="principal_imagem" alt="">



      <script src="../js/darkmode.js"></script>


</body>

</html>