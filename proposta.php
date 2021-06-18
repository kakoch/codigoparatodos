<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Proposta | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\styleFromIndex.css" />
</head>
	<body >
            <div class="container">
                <div>
                    <?php
                    session_start();
                        $cpf = $_SESSION['cpf'];
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                            }
                    ?>
                </div>
                <form action="gets/getFormProposta.php" method="post">
                    <div>
                        <span>Valor a ser emprestado:</span>
                        <input name="valorEmprest" type="text"/>
                        <?php echo $cpf;?>
                    </div>
                    <input type="submit" value="cadastrar">
                </form>
            </div>
        </form>
    </body>
</html>