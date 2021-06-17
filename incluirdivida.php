<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastro | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\styleFromIndex.css" />
</head>
	<body >
            <div class="container">
                <div>
                    <?php
                    session_start();
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                            }
                    ?>
                </div>
                <form action="gets/getFormIncluirDividas.php" method="post">
                    <div>
                        <span>Nome da empresa:</span>
                        <input name="nomeEmpresa" type="text"/>
                    </div>
                    <div>
                        <span>CNPJ da empresa:</span>
                        <input name="cnpj" type="text"/>
                    </div>
                    <div>
                        <span>Numero da cobrança:</span>
                        <input name="ncobra" type="text"/>
                    </div>
                    <div>
                        <span>Valor da divida</span>
                        <input name="divida" type="text"/>
                    </div>
                    <div>
                        <span>CPF do cliente</span>
                        <input name="cpf" type="text"/>
                    </div>
                </form>
                <input type="submit" value="cadastrar">
            </div>
        </form>
    </body>
</html>