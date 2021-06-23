<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title> Entrar | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\index.css" />
</head>
	<body>
        <div class="container">
            <span class="t_s_i">Crédito para todxs</span>
            <form class="form_c" action="gets/getFormLogar.php" method="post">
                <div>
                        <?php
                            session_start();
                            if(isset($_SESSION['msg'])){
                                echo '<span class="msg">'.$_SESSION['msg']."</span>";
                                unset($_SESSION['msg']);
                                }
                        ?>
                </div>
                <div class="form_i">
                    <div class="d_l">
                        <div class="t_i">
                            <input name="cpf" type="text" required/>
                            <label>CPF:</label>
                        </div>
                    </div>
                    <div class="d_l">
                        <div class="t_i">
                            <input name="senha" type="password" required/>
                            <label>Senha:</label>
                        </div>
                    </div>
                    <div class="s_l">
                        <input class="submit" type="submit" value="Entrar">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>