<?php
session_start();
ob_start();

unset($_SESSION['cli_id'], $_SESSION['cli_email'], $_SESSION['cli_name']);
$_SESSION['msg'] = "<p style='color:green'>"."Deslogado com sucesso!"."<p>";

header('location: index.php');
?>