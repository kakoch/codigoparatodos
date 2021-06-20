<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title> Valor disponivel | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\styleFromIndex.css" />
</head>
	<body >
        <form action="../contrato.php" method="post">
            <div class="container">
                <span>Valores disponiveis:</span>
                <div>
                    <?php
                        @session_start();
                        require('../db/connection.php');
                        include('../db/condicoes.php');
                        $_SESSION['valorEmp']= $_POST['valorEmprest'];
                        foreach($soma as $vezes  => $valor){
                            if($valor <($_SESSION['salario']/3))
                            {
                                ?><br><input id="escolha" name="vezes" type="radio" value="<?php echo $vezes; ?>" required/>
                                <?php echo $vezes."x"?>
                                <input id="<?php echo $vezes;?>" name="<?php echo $vezes;?>" disabled="" type="text" value="<?php echo $valor; ?>"></input>
                                <span>com um total de: </span>
                                <input type="text" disabled=""value="<?php echo 'R$'.number_format($valor * $vezes, 2, ',', '.' ); ?>"/>
                        <?php }$_SESSION['id']= $vezes;
                        } ?>
                    <span name="salario"><?php echo 'Seu salario atual é de R$'.number_format($_SESSION['salario'], 2, ',', '.' ); ?></span>
                </div>
                <div>
                    <span>Escolha o dia do vencimento</span>
                    <input name="dataVenc" type="date"/>
                </div>
                <div>
                    <span>CPF do contratante:</span>
                    <input name="cpf" type="number">
                </div>
                <div>
                    <input type="submit" value="contratar">
                </div>
            </div>
        </form>
    </body>
</html>