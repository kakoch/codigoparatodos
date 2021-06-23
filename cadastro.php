<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastro | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\cadastro.css" />
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
                <span class="t_s_i">Crédito para todxs</span>
                <span class="titulo_cad">Cadastro de usuario</span>
                <form class="form_cadastro" action="gets/getFormCadastro.php" method="post">
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="nomeCliente" type="text" minlength="3" required />
                            <label>Nome:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="sobrenomeCliente" type="text" minlength="3"required />
                            <label>Sobrenome:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <select name="sexo" required>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                                <option value="outro">Outro</option>
                            </select>
                            <label>Sexo:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="nascimento" type="date" maxlength="8" required/>
                            <label>Nascimento:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="CPF" type="number"  minlength="11" maxlength="11"required/>
                            <label>CPF:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="endereco" type="text"required/>
                            <label>Endereço:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="complemento" type="text"required/>
                            <label>Complemento:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="nresidencia" type="number"required/>
                            <label>Numero da residencia:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="bairro" type="text"required/>
                            <label>Bairro:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="cidade" type="text"required/>
                            <label>Cidade:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="estado" type="text"required/>
                            <label>Estado:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="pais" type="text"required/>
                            <label>Pais:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="cep" type="number" maxlength="8"required/>
                            <label>CEP:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="profissao" type="text"required/>
                            <label>Profissão:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="salario" type="number"required/>
                            <label>Salario:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="email" type="email" required />
                            <label>Email:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="senha" type="password" minlength="6" maxlength="32"required/>
                            <label>Senha:</label>
                        </div>
                    </div>
                    <div class="d_c">
                        <div class="i_cad">
                            <input name="csenha" type="password" minlength="6"  maxlength="32"required/>
                            <label>Confirmar senha:</label>
                        </div>
                    </div>
                    <div  class="submit">
                        <input class="submit" type="submit" value="cadastrar">
                    </div>
                </form>
            </div>
        </form>
    </body>
</html>