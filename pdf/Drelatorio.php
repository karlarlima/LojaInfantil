<?php
// AQUI TUDO VAI CONECTAR COM O CONTROLER
// include '../Controller/Cped.php';
// $listaPed = Cped::retornarPed();

require "dompdf/Autoload.inc.php";
$dompdf = new Dompdf\Dompdf();



$html = "<style>
* {
    font-family: Verdana, Arial, sans-serif;
    margin: 0;
    padding: 5px;
}
body{
    background-color: rgba(224,241,254,255);
    color: #12314f;
}
table{
    font-size: x-small;
}
tfoot tr td{
    font-weight: bold;
    font-size: x-small;
}

.linha{
    display: flex;
    flex-direction: collun;
    justify-content: center;
    align-items: center;
    margin: 10px;
}

strong{
    font-size: 13px;
}

.gray {
    background-color: rgb(211, 211, 211)
}
</style>
<html>
<head></head>
<body>
<center><img src='logo.png' style='width: 350px;''></center>

<center>
<div clas='linha'>
<center>
    <div>
    <h3>RELATÓRIO DE PEDIDOS</h3>
    </div>
</center>
<center>
                <strong>
    <div '>
                <strong>
                    Presente da Cegonha, uma loja infantil encantadora com uma seleção cuidadosa de brinquedos, roupas e acessórios para bebês e crianças. Nossa equipe está pronta para ajudá-lo a encontrar o presente perfeito.
                </strong>
    </div>
</center>
</div>
</center>


                
  <br/>
    <table width='100%' style='text-align: center;'>
    <thead style='background-color: #86c4fd; color: #12314f;'>
      <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Quantidade</th>
      <th>Preço</th>
      <th>Descrição</th>
      <th>Imagem 1</th>
      <th>Imagem 2</th>
      <th>Imagem 3</th>
      </tr>
    </thead>
    <tbody>";

        // Mude os campos com as informações que você tem no banco
        // foreach ($listaPed as $ped) {
        //     $html .= "<tr>";
        //     $html .= "<td>" . $prod['ped_id'] . "</td>";
        //     $html .= "<td>" . $prod['ped_nome'] . "</td>";
        //     $html .= "<td>" . $prod['ped_quant'] . "</td>";
        //     $html .= "<td>" . $prod['ped_preço'] . "</td>";
        //     $html .= "<td>" . $prod['ped_desc'] . "</td>";
        //     $html .= "<td>" . $prod['ped_img1'] . "</td>";
        //     $html .= "<td>" . $prod['ped_img2'] . "</td>";
        //     $html .= "<td>" . $prod['ped_img3'] . "</td>";
        //     $html .= "</tr>";
        // }

$html .="
    </tbody>
  </table>
</body>
</html>";



$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream("Pedidos", array("Attachment" => false));

use Dompdf\Options;
$options = new Options();
$options->setIsRemoteEnabled(true);
$options->setOptions.($options);
?>