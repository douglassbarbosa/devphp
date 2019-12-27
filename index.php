<?php
//Conecata ao Banco
include("conexao.php"); // conectar ao banco

include("criaBancoTabela.php");//Cria Banco e a tabela

//Carrega a Tabela Existente
$consulta = "SELECT * FROM mensagens";
$cons= $mysqli->query($consulta) or die($mysqli->error);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste Prático</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <!--   -->
    <body>
        <!-- toWrite BD enviar a mensagem para o banco-->
        <div>
            <h1>DEV PHP</h1>
            <!-- FORMULÁRIO -->
            <div> 
                <form method="POST" action="teste.php">
                    <textarea name="MSG" placeholder="Escreva sua mensagem aqui."></textarea>
                    <!-- button -->
                    <div>
                        <button type="submit">Enviar</button>
                    </div>
                </form>
            </div>
            <!-- PAINEL  -->
            <div>
            <h2>Mensagens salvas:</h2>
            <!-- TABELA -->
            <table border="1">
              <tr>
                <td>Formato 1</td>
                <td>Formato 2</td>
                <td>Formato 3</td>
                <td>Mensagens</td>
              </tr>
              <!-- LOOP para Mostrar as MSG Salvas -->
              <?php while($dado = $con->fetch_array()) { ?>
                <tr>
                  <td><?php echo date('d/m/Y', strtotime($dado['datahora'])); ?></td>
                  <td><?php echo date('Y-m-d', strtotime($dado['datahora'])); ?></td>
                  <td><?php echo date('l,d/m/Y', strtotime($dado['datahora'])); ?></td>
                  <td><?php echo $dado['dataFormat1']; ?></td>
                </tr>
              <?php } ?>
            </table>
            </div>
        </div>        
    </body>
</html>
