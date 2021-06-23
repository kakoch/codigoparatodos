<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Proposta | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\i_dividas.css" />
</head>
	<body >
            <div class="container">
                <span class="t_s_i">Crédito para todxs</span>
                <span class="d-e">Proposta de emprestimo</span>
                <div class="i_msg">
                    <?php
                    session_start();
                        $cpf = $_SESSION['cpf'];
                        if(isset($_SESSION['msg'])){
                            echo '<span class="msg">'.$_SESSION['msg']."</span>";
                            unset($_SESSION['msg']);
                            }
                    ?>
                </div>
                <form class="form_i" action="gets/getFormProposta.php" method="post">
                    <div class="d_i">
                        <div class="t_i">
                            <input name="valorEmprest" type="decimal" required/>
                            <label>Valor a ser emprestado:</label>
                        </div>
                    </div>
                    <div class="d_i">
                        <div class="t_i">
                            <input name="dataVenc" type="date" required/>
                            <label class="d_data">Data do vencimento:</label>
                        </div>
                    </div>
                    <div class="d_cpf">
                        <input name="cpf" disabled=""  value="<?php echo 'Seu é '. $cpf;?>"/>
                    </div>
                    <div class="submit">
                        <input type="submit" value="cadastrar">
                    </div>
                </form>
            </div>
    </body>
</html>