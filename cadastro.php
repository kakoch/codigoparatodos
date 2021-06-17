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
                <form action="gets/getFormCadastro.php" method="post">
                    <div>
                        <span>Nome:</span>
                        <input name="nomeCliente" type="text"/>
                    </div>
                    <div>
                        <span>Sobrenome:</span>
                        <input name="sobrenomeCliente" type="text"/>
                    </div>
                    <div>
                        <span>Nascimento:</span>
                        <input name="nascimento" type="date"/>
                    </div>
                    <div>
                        <span>CPF:</span>
                        <input name="CPF" type="text"/>
                    </div>
                    <div>
                        <span>Salario:</span>
                        <input name="salario" type="text"/>
                    </div>
                    <div>
                        <span>Email:</span>
                        <input name="email" type="email"/>
                    </div>
                    <div>
                        <span>Senha:</span>
                        <input name="senha" type="password"/>
                    </div>
                    <div>
                        <span>Confirmar senha:</span>
                        <input name="csenha" type="password"/>
                    </div>
                    <input type="submit" value="cadastrar">
                </form>
            </div>
        </form>
    </body>
</html>