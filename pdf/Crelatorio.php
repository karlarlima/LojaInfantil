<?php
include '../Controller/Cclient.php';
$listaClient = Cclient::retornarClient();

//var_dump($listaLivros);

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
    <h3>RELATÓRIO DE PRODUTOS</h3>
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
      <th>Endereço Id</th>
      <th>Nome</th>
      <th>D. Nascimento</th>
      <th>Email</th>
      <th>Usuário</th>
      <th>CPF</th>
      <th>Telef.</th>
      <th>Tipo Id.</th>
      </tr>
    </thead>
    <tbody>";

        foreach ($listaClient as $client) {
            $html .= "<tr>";
            $html .= "<td>" . $client['cli_id'] . "</td>";
            $html .= "<td>" . $client['cli_end'] . "</td>";
            $html .= "<td>" . $client['cli_name'] . "</td>";
            $html .= "<td>" . $client['cli_born'] . "</td>";
            $html .= "<td>" . $client['cli_email'] . "</td>";
            $html .= "<td>" . $client['cli_usu'] . "</td>";
            $html .= "<td>" . $client['cli_cpf'] . "</td>";
            $html .= "<td>" . $client['cli_cell'] . "</td>";
            $html .= "<td>" . $client['cli_tipo'] . "</td>";
            $html .= "</tr>";
        }

$html .="
    </tbody>
  </table>
</body>
</html>";



$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream("Clientes", array("Attachment" => false));

use Dompdf\Options;
$options = new Options();
$options->setIsRemoteEnabled(true);
$options->setOptions.($options);
?>