<?php 
?>

<?php
include "../Controller/Cprod.php";
$listaProd = Cprod::retornarProd();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Início</title>
   <link rel="shortcut icon" href="../IMG/logo.png" type="image/x-icon" />
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
            <a href="login_adm.html">
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

         <form action="../router/Rprod.php?acao=enviar&tipo=cadastro" method="post">
            <h3>Cadastro de produtos</h3>
            <input type="text" placeholder="Id" name="prod_id" required autocomplete="off" class="box" readonly value="<?php echo filter_input(INPUT_GET, 'prod_id'); ?>">
            <input type="text" placeholder="Nome" name="prod_nome" required autocomplete="off" class="box" value="<?php echo filter_input(INPUT_GET, 'prod_nome'); ?>">
            <input type="text" placeholder="Quantidade" name="prod_quant" required autocomplete="off" class="box" value="<?php echo filter_input(INPUT_GET, 'prod_quant'); ?>">
            <input type="text" placeholder="Preço" name="prod_preco" required autocomplete="off" class="box" value="<?php echo filter_input(INPUT_GET, 'prod_preco'); ?>">
            <input type="text" placeholder="Descrição" name="prod_desc" required autocomplete="off" class="box" value = "<?php echo filter_input(INPUT_GET, 'prod_desc');?>">
         
         <select name="prod_cat" class="box" id = "categoria">
        
         <option>Selecionar Categoria</option>
         <?php 
         require_once('../DAO/conexao.php');
         $pdo = Conexao::criarInstancia(); 
         $sql = "SELECT * FROM categoria";
         $stmt = $pdo->prepare($sql);
         $stmt->execute(); 

         if($stmt->rowCount() !=0){
         foreach ($stmt as $categoria) {?> 
               <option value="<?php echo $categoria['cat_id'];?>">
               <?php echo $categoria['cat_categoria'];?>
               </option> <?php } } ?> 
               </select><br>

         <select name="prod_sub" class="box" id ="subcategoria"> 
         <option>Selecione Subcategoria</option>
         </select>
            <input type="file" name="prod_img1" id="prod_img1" required autocomplete="off" class="box file-input-label" value="<?php echo filter_input(INPUT_GET, 'prod_img1'); ?>">
            <label class="file-input-label" for="prod_img1">Selecionar arquivo</label>
            <input type="file" name="prod_img2" id="prod_img2"  required autocomplete="off" class="box file-input-label" value="<?php echo filter_input(INPUT_GET, 'prod_img2'); ?>">
            <label class="file-input-label" for="prod_img2">Selecionar arquivo</label>
            <input type="file" name="prod_img3" id="prod_img3"  required autocomplete="off" class="box file-input-label" value="<?php echo filter_input(INPUT_GET, 'prod_img3'); ?>">
            <label class="file-input-label" for="prod_img3">Selecionar arquivo</label>
             <input type="submit" value="Enviar" class="botao" name="enviar">
         </form>

      </div>
   </section>
   <script src="../js/darkmode.js"></script>
   <!-- Tabelinha -->
   <div class="divfor">
      <table id="Produt" class="table table-striped" width="100%">
         <thead>
            <tr>
               <th class="th-sm">#</th>
               <th class="th-sm">Nome</th>
               <th class="th-sm">Quantidade</th>
               <th class="th-sm">Preço</th>
               <th class="th-sm">Descrição</th>
               <th class="th-sm">Imagem 1</th>
               <th class="th-sm">Imagem 2</th>
               <th class="th-sm">Imagem 3</th>
               <th class="th-sm">Categoria</th>
               <th class="th-sm">Subcategoria</th>
               <th class="th-sm">Editar</th>
               <th class="th-sm">Excluir</th>
            </tr>
         </thead>
         <tbody>
            <?php
            foreach ($listaProd as $prod) {
               echo "<tr>
               <td>" . $prod['prod_id'] . "</td>
               <td>" . $prod['prod_nome'] . "</td>
               <td>" . $prod['prod_quant'] . "</td>
               <td>" . $prod['prod_preco'] . "</td>
               <td>" . $prod['prod_desc'] . "</td>
               <td>" . $prod['prod_img1'] . "</td>
               <td>" . $prod['prod_img2'] . "</td>
               <td>" . $prod['prod_img3'] . "</td>
               <td>" . $prod['cat_categoria'] . "</td>
               <td>" . $prod['sub_cat'] . "</td>
               <td> <a href='produtos_adm.php?prod_id=" . $prod['prod_id'] . "&prod_nome=" . $prod['prod_nome'] . "&prod_quant=" . $prod['prod_quant'] . "&prod_preco=" . $prod['prod_preco'] . "&prod_desc=" . $prod['prod_desc'] . "&prod_img1=" . $prod['prod_img1'] . "&prod_img2=" . $prod['prod_img2'] . "&prod_img3=" . $prod['prod_img3'] . "&prod_cat=" . $prod['cat_categoria'] . "&prod_sub=" . $prod['sub_cat'] ."'><button type='submit'>Editar</button></a></td>
               <td> <a href='../router/Rprod.php?acao=excluir&tipo=clientes&prod_id=" . $prod['prod_id'] . "'><button type='submit'>Excluir</button></a></td>
            </tr>";
            }
            ?>
         </tbody>
      </table>
   </div>
   <script src="../JS/funcoes.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" language="javascript">
      $(document).ready(function() {
         $('#Produt').DataTable({
            language: {
               url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            }
         });
      });
   </script>
   <button type="button" onclick="window.open('../pdf/Prelatorio.php', '_blank')">Relatório de produtos</button>
</body>

</html>