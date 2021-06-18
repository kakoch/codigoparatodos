<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title> Inicio | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\styleFromIndex.css" />
</head>
	<body >
        <form action="contrato.php" method="post">
            <div class="container">
                <span>Valores disponiveis:</span>
                <div>
                    <?php
                    require('../db/connection.php');
                    include('../db/condicoes.php');  
                    foreach($soma as $k  => $a){
                        if($a <($_SESSION['salario']/3))
                        {
                            ?><p><input name="vezes" type="radio" value="<?php echo $k;?>">
                            <?php echo $k."x de ".$a." com total de ".$a *$k; ?>
                        <?php }} ?></input>
                </div>
                <div>
                    <input type="submit" value="contratar">
                </div>
            </div>
        </form>
    </body>
</html>