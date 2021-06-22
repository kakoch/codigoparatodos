<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title> Entrar | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\styleFromIndex.css" />
</head>
	<body >
        <form action="gets/getFormLogar.php" method="post">
            <div class="container">
                    <?php
                        session_start();
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                            }
                    ?>
                <div class="cpf">
                    <span>CPF:</span>
                    <input name="cpf" type="text"/>
                </div>
                <div class="senha">
                    <span>Senha:</span>
                    <input name="senha" type="password"/>
                </div>
                <input class="submit" type="submit" value="Entrar">
            </div>
        </form>
    </body>
</html>