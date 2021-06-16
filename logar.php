<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title> | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\styleFromIndex.css" />
</head>
	<body >
        <form action="getFormLogar.php" method="post">
            <div class="container">
                <div>
                    <?php
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                            }
                    ?>
                </div>
                <div>
                    <span>CPF:</span>
                    <input name="cpf" type="text"/>
                </div>
                <div>
                    <span>Senha:</span>
                    <input name="senha" type="password"/>
                </div>
                <input type="submit" value="consultar">
            </div>
        </form>
    </body>
</html>