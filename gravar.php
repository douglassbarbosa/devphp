<?php
//Conecta ao Banco
include_once('conexao.php');
Salva
$dataHora = date('l-d-m-Y');
$msgm = $_POST['MSG'];

$resultado_msg = "INSERT INTO mensagens(criadoEm,mensagem) VALUES ('$dataHora','$msgm')";

?>