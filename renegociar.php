<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Renegociar | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\renegociar.css" />
</head>
	<body >
        <?php
            session_start();
            $id = $_GET['id'];
            $_SESSION['id_divida']= $id;
            require('db/connection.php');
            require('db/consultaForRenegociar.php');
        ?>
        <div class="container">
            <span class="t_s_i">Crédito para todxs</span>
            <form class="f_r" action="gets/getFormRenegocio.php" method="post">
                <div class="inputs">
                    <div class="i_inputs">
                        <input name="vezes" type="radio" checked value="1"/> <span>1x de <?php echo number_format($x1, 2, ',', '.' ); ?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="2"/> <span>2x de <?php echo number_format($x2, 2, ',', '.' ); ?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="3"/> <span>3x de <?php echo number_format($x3, 2, ',', '.' ); ?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="4"/> <span>4x de <?php echo number_format($x4, 2, ',', '.' ); ?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="5"/> <span>5x de <?php echo number_format($x5, 2, ',', '.' ); ?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="6"/> <span>6x de <?php echo number_format($x6, 2, ',', '.' ); ?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="7"/> <span>7x de <?php echo number_format($x7, 2, ',', '.' ); ?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="8"/> <span>8x de <?php echo number_format($x8, 2, ',', '.' ); ?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="9"/> <span>9x de <?php echo number_format($x9, 2, ',', '.' ); ?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="10"/><span>10x de <?php echo number_format($x10, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="11"/><span>11x de <?php echo number_format($x11, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="12"/><span>12x de <?php echo number_format($x12, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="13"/><span>13x de <?php echo number_format($x13, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="14"/><span>14x de <?php echo number_format($x14, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="15"/><span>15x de <?php echo number_format($x15, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="16"/><span>16x de <?php echo number_format($x16, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="17"/><span>17x de <?php echo number_format($x17, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="18"/><span>18x de <?php echo number_format($x18, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="19"/><span>19x de <?php echo number_format($x19, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="20"/><span>20x de <?php echo number_format($x20, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="21"/><span>21x de <?php echo number_format($x21, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="22"/><span>22x de <?php echo number_format($x22, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="23"/><span>23x de <?php echo number_format($x23, 2, ',', '.' );?></span>
                    </div>
                    <div class="i_inputs">
                        <input name="vezes" type="radio" value="24"/><span>24x de <?php echo number_format($x24, 2, ',', '.' );?></span>
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" value="cadastrar">
                </div>
            </form>
        </div>
    </body>
</html>