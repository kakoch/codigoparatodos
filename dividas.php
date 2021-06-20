<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title> Dividas | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\styleFromIndex.css" />
</head>
	<body >
    <?php
        session_start();
        require('db/connection.php');
        $consultaDivida = "SELECT * FROM dividas WHERE cpf = '{$_SESSION['cpf']}'" or print mysql_error();
	    $conD = mysqli_query($conn,$consultaDivida);
        $consultaEmprestimo = "SELECT * FROM emprestimo WHERE clientes_cpf = '{$_SESSION['cpf']}'" or print mysql_error();
	    $conE = mysqli_query($conn,$consultaEmprestimo);
    ?>
        <form action="consultaCpf.php" method="post">
            <div class="container">
                <span>Consultar meu CPF</span>
                <input name="consultaCpf" type="text"/>
                <input type="submit" value="consultar">
            </div>
        </form>
        <div>
            <div>
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        }
                ?>
            </div>
            <table class="event">
                <tr>
                    <td>ID divida</td>
                    <td>Nome da empresa</td>
                    <td>CNPJ </td>
                    <td>Valor da divida </td>
                    <td>CPF do cliente</td>
                    <td>Vamos negociar?</td>
                </tr>
                <?php while($dado = $conD->fetch_array()){?>
                <tr>
                    <td><?php echo $dado['codigo_divida']; ?></td>
                    <td><?php echo $dado['nome_empresa']; ?></td>
                    <td><?php echo $dado['cnpj']; ?></td>
                    <td><?php echo $dado['valor_divida']; ?></td>
                    <td><?php echo $dado['cpf']; ?></td>
                    <td class="alt"><a href="renegociar.php?&id=<?php echo $dado['codigo_divida']; ?>">Vamos!</a></td>
                </tr>
                <?php } ?>
            </table>
            <table class="event">
                <tr>
                    <td>ID emprestimo</td>
                    <td>Valor contratado</td>
                    <td>vezes </td>
                    <td>Mensalidade</td>
                    <td>Data vencimento</td>
                    <td>CPF contratante</td>
                    <td>IOF pago</td>
                    <td>Vamos negociar?</td>
                </tr>
                <?php while($dado2 = $conE->fetch_array()){?>
                <tr>
                    <td><?php echo $dado2['id_emprestimo']; ?></td>
                    <td><?php echo $dado2['valor_solicitado']; ?></td>
                    <td><?php echo $dado2['vezes']; ?></td>
                    <td><?php echo $dado2['mensalidade']; ?></td>
                    <td><?php echo $dado2['data_vencimento']; ?></td>
                    <td><?php echo $dado2['clientes_cpf']; ?></td>                    
                    <td><?php echo $dado2['iof']; ?></td>                    
                    <td class="alt"><a href="renegociar.php?&id=<?php echo $dado2['id_emprestimo']; ?>">Vamos!</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>