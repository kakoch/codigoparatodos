<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title> Valor disponivel | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css\getProposta.css" />
</head>
	<body >
        <?php
            @session_start();
            require('../db/connection.php');
            include('../db/condicoes.php');
            $_SESSION['valorEmp']= $_POST['valorEmprest'];
            $_SESSION['dataVenc'] = $_POST['dataVenc'];
        ?>
        <div class="container">
            <span class="t_s_i">Crédito para todxs</span>
            <span class="d-e">Valores disponiveis:</span>
            <div class="d_salario">
                <span name="salario"><?php echo 'Seu salario atual é de: R$'.number_format($_SESSION['salario'], 2, ',', '.' ); ?></span>
            </div>
        <?php

            foreach($soma as $vezes  => $valor){
                if($valor <($_SESSION['salario']/3))
                                {
        ?>
            
            <form action="../contrato.php?id=<?php echo number_format($valor, 2, ',', '.' ); ?>&p=<?php echo $vezes; ?>" method="post">
                <div class="i_inputs">
                    <div class="inputs"> 
                        <input id="escolha" name="vezes" type="radio" value="<?php echo $vezes; ?>"/>
                        <span><?php echo $vezes."x de "?> </span>
                        <input name="<?php echo $vezes;?>" disabled="" type="text" value="<?php echo 'R$ '. number_format($valor, 2, ',', '.' ) ?>"/>
                        <span>com um total de: </span>
                        <input type="text" disabled=""value="<?php echo 'R$ '.number_format($valor * $vezes, 2, ',', '.' ); ?>"/>
                        <div class="submit">
                            <input type="submit" value="contratar">
                        </div>
                    </div>  
                </div>
            </form>
            <?php }
                } ?>
        </div>
    </body>
</html>