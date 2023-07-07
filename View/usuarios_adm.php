<?php 
session_start();
ob_start();

if((!isset($_SESSION['cli_id'])) and (!isset($_SESSION['cli_email']))){
   $_SESSION['msg'] = "<p style = 'color: red'>"."Erro: Precisa ser administrador para ter acesso a essa página"."<p>";
   header('location: index.php');
}
?>
<?php
include "../Controller/Cclient.php";
$listaClient = Cclient::retornarClient();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Início</title>
   <link rel="shortcut icon" href="../IMG/logo.png" type="image/x-icon"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="stylesheet" href="../css/style_adm.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

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

<section class="cl_produtos">

    <div class="row">
 
       <form action="../router/Rcad.php?acao=enviar&tipo=cadastro" method="post">
          <h3>Cadastro de usuários</h3>
          <input type="text" placeholder="Id" name="cli_id" required autocomplete="off" class="box" readonly value = "<?php echo filter_input(INPUT_GET, 'cli_id');?>">
          <input type="number" placeholder="Id do endereço" name="cli_end" required autocomplete="off" class="box" value = "<?php echo filter_input(INPUT_GET, 'cli_end');?>">
          <input type="text" placeholder="Nome" name="cli_name" required autocomplete="off" class="box" value = "<?php echo filter_input(INPUT_GET, 'cli_name');?>">
          <input type="date" placeholder="Data de Nascimento" name="cli_born" required autocomplete="off" class="box" value = "<?php echo filter_input(INPUT_GET, 'cli_born');?>">
          <input type="text" placeholder="Email" name="cli_email" required autocomplete="off" class="box" value = "<?php echo filter_input(INPUT_GET, 'cli_email');?>">
          <input type="text" placeholder="Senha" name="cli_pass" required autocomplete="off" class="box" value = "<?php echo filter_input(INPUT_GET, 'cli_pass');?>">
          <input type="text" placeholder="Usuário" name="cli_usu" required autocomplete="off" class="box" value = "<?php echo filter_input(INPUT_GET, 'cli_usu');?>">
          <input type="text" placeholder="CPF" name="cli_cpf" required autocomplete="off" class="box" value = "<?php echo filter_input(INPUT_GET, 'cli_cpf');?>">
          <input type="text" placeholder="Telefone" name="cli_cell" required autocomplete="off" class="box" value = "<?php echo filter_input(INPUT_GET, 'cli_cell');?>">
          <input type="number" placeholder="Tipo" name="cli_tipo" required autocomplete="off" class="box" value = "<?php echo filter_input(INPUT_GET, 'cli_tipo');?>">
          <input type="submit" value="Enviar" class="botao" name="submit">
       </form>
 
    </div>
 
 </section>
 
<script src="../js/darkmode.js"></script>

<!-- Tabelinha -->
<div class="divfor" style="margin-inline: 8%;">
<table id="Client" class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">#</th>
                            <th class="th-sm">Endereço Id</th>
                            <th class="th-sm">Nome</th>
                            <th class="th-sm">D. Nascimento</th>
                            <th class="th-sm">Email</th>
                            <th class="th-sm">Usuário</th>
                            <th class="th-sm">CPF</th>
                            <th class="th-sm">Telef.</th>
                            <th class="th-sm">Tipo Id.</th>
                            <th class="th-sm">Editar</th>
                            <th class="th-sm">Excluir</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <div class="divfor2">
                        <?php
                        foreach ($listaClient as $client) {
                            echo "<tr>
                                            <td>" . $client['cli_id'] . "</td>
                                            <td>" . $client['cli_end'] . "</td>
                                            <td>" . $client['cli_name'] . "</td>
                                            <td>" . $client['cli_born'] . "</td>
                                            <td>" . $client['cli_email'] . "</td>
                                            <td>" . $client['cli_usu'] . "</td>
                                            <td>" . $client['cli_cpf'] . "</td>
                                            <td>" . $client['cli_cell'] . "</td>
                                            <td>" . $client['cli_tipo'] . "</td>
                                            <td> <a href= 'usuarios_adm.php?cli_id=".$client['cli_id']."&cli_end=".$client['cli_end']."&cli_name=".$client['cli_name']."&cli_born=".$client['cli_born']."&cli_email=".$client['cli_email']."&cli_pass=".$client['cli_pass']."&cli_usu=".$client['cli_usu']."&cli_cpf=".$client['cli_cpf']."&cli_cell=".$client['cli_cell']."&cli_tipo=".$client['cli_tipo']."'><button type='submit'>Editar</button></a></td>
                                            <td> <a href= '../router/Rcad.php?acao=excluir&tipo=clientes&cli_id=".$client['cli_id']."'><button type='submit'>Excluir</button></a></td>
                                            </tr>";
                        }
                        ?>
                        </div>
                     </div>
                    </tbody>
                </table>

                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
                <script type="text/javascript" language="javascript">
                    $(document).ready(function() {
                        $('#Client').DataTable({
                            language: {
                                url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                            }
                        });
                    });
                </script>

<div class="divfor3">
      <button type="button" onclick="window.open('../pdf/Crelatorio.php', '_blank')">Relatório de clientes</button>
   </div>
   
</body>
</html>