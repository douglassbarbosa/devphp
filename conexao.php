<?php
//Criando Conexao
$link = mysql_connect('localhost', 'admin', 's3nh@123');

//Checando Conexao
if (!$link) {
    die('Erro de Conexão: ' .mysql_error());
}
echo "Teste de conexão com o banco de dados: Ok\n\n";

//--------------------------------------

?>