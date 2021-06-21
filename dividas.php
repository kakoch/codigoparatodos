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
        require('db/consultaForDividas.php');

    ?>
        <div>
            <div>
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        }
                ?>
            </div>
            <a href="proposta.php">proposta</a>
            <table class="event">
                <tr>
                    <th>ID divida</th>
                    <th>Nome da empresa</th>
                    <th>CNPJ </th>
                    <th>Valor da divida </th>
                    <th>CPF do cliente</th>
                    <th>Situação</th>
                    <th>Vamos negociar?</th>
                </tr>
                <?php while($dado = $conD->fetch_array()){?>
                <tr>
                    <td><?php echo $dado['codigo_divida']; ?></td>
                    <td><?php echo $dado['nome_empresa']; ?></td>
                    <td><?php echo $dado['cnpj']; ?></td>
                    <td><?php echo 'R$'.$dado['valor_divida']; ?></td>
                    <td><?php echo $dado['cpf']; ?></td>
                    <td><?php if($dado['situacao'] == 1){ echo 'Divida em dia!';}elseif($dado['situacao']==2){echo "Divida negativada!";}elseif($dado['situacao'] == 3){echo 'Aguardando analise!';}; ?></td>
                    <td class="alt"><a href="renegociar.php?&id=<?php echo $dado['codigo_divida']; ?>">Vamos!</a></td>
                </tr>
                <?php } ?>
            </table>
            <table class="event">
                <tr>
                    <th>ID emprestimo</th>
                    <th>Valor contratado</th>
                    <th>vezes </th>
                    <th>Mensalidade</th>
                    <th>Data vencimento</th>
                    <th>CPF contratante</th>
                    <th>IOF pago</th>
                    <th>Situação</th>
                </tr>
                <?php while($dado2 = $conE->fetch_array()){if ($dado2['situacao'] <= 3){ ?>
                <tr>
                    <td><?php echo $dado2['id_emprestimo']; ?></td>
                    <td><?php echo $dado2['valor_solicitado']; ?></td>
                    <td><?php echo $dado2['vezes']; ?></td>
                    <td><?php echo 'R$'.$dado2['mensalidade']; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($dado2['data_vencimento'])); ?></td>
                    <td><?php echo $dado2['clientes_cpf']; ?></td>                    
                    <td><?php echo 'R$'.$dado2['iof']; ?></td>                   
                    <td><?php if($dado2['situacao'] == 1){ echo 'Divida em dia!';}elseif($dado2['situacao']==2){echo "Divida negativada!";}elseif($dado2['situacao'] == 3){echo 'Aguardando analise!';}; ?></td>                   
                </tr>
                <?php }} ?>
            </table>
        </div>
    </body>
</html>