<?php 
session_start();
ob_start();

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
   <link rel="shortcut icon" href="../IMG/logo.png" type="image/x-icon"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="stylesheet" href="../CSS/style_adm.css">

</head>
<body>

   <div class="divMenu">

      <div class="adm">
         <img src="../IMG/adm.png" class="adm_imagem" alt="">
         <h3 class="cl_adm">Administrador</h3>
      </div>
   
      <nav class="navbar">
      <a href="inicio_adm.php"><i class="fas fa-home"></i><span>Início</span></a>
      <a href="usuarios_adm.php"><i class="	fa fa-address-book"></i><span>Usuários</span></a>
      <a href="produtos_adm.php"><i class="fas fa-shirt"></i><span>Produtos</span></a>
      <a href="sobre_adm.php"><i class="fa fa-info-circle"></i><span>Sobre nós</span></a>
      <a href="Vlogin.php"><i class="fas fa-sign-out-alt"></i><span>Sair</span></a>
   
      </nav>
   
   </div>

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

<section class="sobre" id="sobre">

   <h1> Loja Infantil - 3º Informática</h1>

   <div class="agrupamento">

   <div class="cada">
         <img src="../IMG/clara.png">
         <h3>Clara Cruz</h3>
         <span>Número 09</span>
      </div> 

      <div class="cada">
       <img src="../IMG/sanaelli.png">
       <h3>Sanaelli Barros</h3>
       <span>Número 14</span>
    </div> 

    <div class="cada">
       <img src="../IMG/grazielly.png">
       <h3>Grazielly Marreiro</h3>
       <span>Número 18</span>
    </div> 

    <div class="cada">
       <img src="../IMG/karla.png">
       <h3>Karla Lima</h3>
       <span>Número 25</span>
    </div> 

    <div class="cada">
       <img src="../IMG/isabel.png">
       <h3>Isabel Almeida</h3>
       <span>Número 30</span>
    </div> 

    <div class="cada">
       <img src="../IMG/murilo.png">
       <h3>Murilo Maciel</h3>
       <span>Número 35</span>
    </div> 

    <div class="cada">
       <img src="../IMG/jefferson.png">
       <h3>Jefferson Moreno</h3>
       <span>Número 37</span>
    </div> 

    <div class="cada">
      <img src="../IMG/professor.png">
      <h3>Leonardo Carvalho</h3>
      <span>Professor</span>
   </div> 

   </div>

</section>
<script src="../js/darkmode.js"></script>

   
</body>
</html>