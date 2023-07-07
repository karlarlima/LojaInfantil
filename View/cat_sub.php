<?php
include '../DAO/conexao.php';


$sub = $_GET['subcat_id'];

$pdo = Conexao::criarInstancia();
$sql = "SELECT * FROM subcategoria WHERE subcat_id=:subcat_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam('subcat_id', $sub);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($row as $subc) {?> 
          <option value="<?php echo $subc['sub_id'];?>">
          <?php echo $subc['sub_cat'];?>
          </option> <?php } ?>