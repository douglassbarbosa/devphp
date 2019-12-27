<?php
//Certifica-se de estar conectado ao banco
include_once('conexao.php');

//Criando o Banco de Dados chamado bancoMSG
$sql = 'CREATE DATABASE bancoMSG';

if (mysql_query($link, $sql)) {
    echo "Banco de Dados Criado!!\n";
} else {
    echo 'Error ao Criar Banco de Dados: ' .mysql_error($link) . "\n";
}
//---------------------------------------

//Criando a Tabela 
$table ="CREATE TABLE mensagens(
id NOT NULL AUTO_INCREMENT,
criadoEm DATE,
mensagem VARCHAR(140)
)";

//Checa a criação da Tabela
if (mysqli_query($link, $sql)) {
    echo "Tabela Criada com Sucesso.\n\n";
} else {
    echo "Erro ao Criar a Ta: bela:" . mysqli_error($link);
}

//---------------------------------------
?>