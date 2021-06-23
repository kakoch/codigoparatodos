<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title> Inicio | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\index.css" />
</head>
	<body >
        <div class="container">
            <span class="t_s_i">Crédito para todxs</span>
            <form class="form_c" action="db/consultaCpf.php" method="post">
                <div class="form_i">
                    <div class="d_i">
                        <div class="t_i">
                            <input name="consultaCpf" type="text" required/>
                            <label>Consultar meu CPF</label>
                        </div>
                    </div>
                    <div class="s_i">
                        <input type="submit" value="consultar"/>
                        <span>Já tem cadastro?</span><a href="logar.php">Acessar!</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>