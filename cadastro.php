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
                        <input name="nomeCliente" type="text" minlength="3" />
                    </div>
                    <div>
                        <span>Sobrenome:</span>
                        <input name="sobrenomeCliente" type="text" minlength="3" />
                    </div>
                    <div>
                        <span>Sexo:</span>
                        <select name="sexo">
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>
                    <div>
                        <span>Nascimento:</span>
                        <input name="nascimento" type="date" maxlength="8"/>
                    </div>
                    <div>
                        <span>CPF:</span>
                        <input name="CPF" type="number"  minlength="11" maxlength="11"/>
                    </div>
                    <div>
                        <span>Endereço:</span>
                        <input name="endereco" type="text"/>
                    </div>
                    <div>
                        <span>Complemento:</span>
                        <input name="complemento" type="text"/>
                    </div>
                    <div>
                        <span>Numero da residencia:</span>
                        <input name="nresidencia" type="number"/>
                    </div>
                    <div>
                        <span>Bairro:</span>
                        <input name="bairro" type="text"/>
                    </div>
                    <div>
                        <span>Cidade:</span>
                        <input name="cidade" type="text"/>
                    </div>
                    <div>
                        <span>Estado:</span>
                        <input name="estado" type="text"/>
                    </div>
                    <div>
                        <span>Pais:</span>
                        <input name="pais" type="text"/>
                    </div>
                    <div>
                        <span>CEP:</span>
                        <input name="cep" type="number" maxlength="8"/>
                    </div>
                    <div>
                        <span>Profissão:</span>
                        <input name="profissao" type="text"/>
                    </div>
                    <div>
                        <span>Salario:</span>
                        <input name="salario" type="number"/>
                    </div>
                    <div>
                        <span>Email:</span>
                        <input name="email" type="email"/>
                    </div>
                    <div>
                        <span>Senha:</span>
                        <input name="senha" type="password" minlength="6" maxlength="32"/>
                    </div>
                    <div>
                        <span>Confirmar senha:</span>
                        <input name="csenha" type="password" minlength="6"  maxlength="32"/>
                    </div>
                    <input type="submit" value="cadastrar">
                </form>
            </div>
        </form>
    </body>
</html>