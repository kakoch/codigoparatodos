<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cobrar | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\i_dividas.css" />
</head>
	<body >
            <div class="container">
                <span class="t_s_i">Crédito para todxs</span>
                <span class="d-e">Incluir dividas</span>
                <div class="i_msg">
                    <?php
                    session_start();
                        if(isset($_SESSION['msg'])){
                            echo '<span class="msg">'.$_SESSION['msg']."</span>";
                            unset($_SESSION['msg']);
                            }
                    ?>
                </div>

                <form class="form_i" action="gets/getFormIncluirDividas.php" method="post">
                    <div class="d_i">
                        <div class="t_i">
                            <input name="nomeEmpresa" type="text" required/>
                            <label>Nome da empresa:</label>
                        </div>
                    </div>
                    <div class="d_i">
                        <div class="t_i">
                            <input name="cnpj" type="text"required/>
                            <label>CNPJ da empresa:</label>
                        </div>
                    </div>
                    <div class="d_i">
                        <div class="t_i">
                            <input name="ncobra" type="text"required/>
                            <label>Numero da cobrança:</label>
                        </div>
                    </div>
                    <div class="d_i">
                        <div class="t_i">
                            <input name="divida" type="text"required/>
                            <label>Valor da divida</label>
                        </div>
                    </div>
                    <div class="d_i">
                        <div class="t_i">
                            <input name="cpf" type="text"required/>
                            <label>CPF do cliente</label>
                        </div>
                    </div>
                    <div class="submit">
                        <input type="submit" value="cadastrar">
                    </div>
                </form>
                
            </div>
        </form>
    </body>
</html>