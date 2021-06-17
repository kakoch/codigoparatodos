<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title> | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\styleFromIndex.css" />
</head>
	<body >
    <?php
        session_start();
        require('db/connection.php');
        $consulta = "SELECT * FROM dividas WHERE clientes_cpf = '{$_SESSION['cpf']}'" or print mysql_error();
	    $con = mysqli_query($conn,$consulta);
    ?>
        <form action="consultaCpf.php" method="post">
            <div class="container">
                <span>Consultar meu CPF</span>
                <input name="consultaCpf" type="text"/>
                <input type="submit" value="consultar">
            </div>
        </form>
        <div>
            <table class="event">
                <tr>
                    <td>ID divida</td>
                    <td>Nome da empresa</td>
                    <td>CNPJ </td>
                    <td>Valor da divida </td>
                    <td>CPF do cliente</td>
                    <td>Vamos negociar?</td>
                </tr>
                <?php while($dado = $con->fetch_array()){?>
                <tr>
                    <td><?php echo $dado['codigo_divida']; ?></td>
                    <td><?php echo $dado['nome_empresa']; ?></td>
                    <td><?php echo $dado['cnpj']; ?></td>
                    <td><?php echo $dado['valor_divida']; ?></td>
                    <td><?php echo $dado['clientes_cpf']; ?></td>
                    <td class="alt"><a href="renegociar.php?&id=<?php echo $dado['codigo_divida']; ?>">Vamos!</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>