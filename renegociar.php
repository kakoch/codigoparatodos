<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Renegociar | Crédito Para Todxs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\styleFromIndex.css" />
</head>
	<body >
            <div class="container">
                <div>
                    <?php
                        session_start();
                        $id = $_GET['id'];
                        $_SESSION['id_divida']= $id;
                        require('db/connection.php');
                        require('db/consultaForRenegociar.php');

                    ?>
                </div>
                
                <form action="gets/getFormRenegocio.php" method="post">
                    <div>
                    <?php echo $id."|".$_SESSION['situacao'];?>
                        <tr>
                            <br><input name="vezes" type="radio" value="1"/> <span>1x </span> <?php echo number_format($x1, 2, ',', '.' ); ?></br>
                            <br><input name="vezes" type="radio" value="2"/> <span>2x </span> <?php echo number_format($x2, 2, ',', '.' ); ?></br>
                            <br><input name="vezes" type="radio" value="3"/> <span>3x </span> <?php echo number_format($x3, 2, ',', '.' ); ?></br>
                            <br><input name="vezes" type="radio" value="4"/> <span>4x </span> <?php echo number_format($x4, 2, ',', '.' ); ?></br>
                            <br><input name="vezes" type="radio" value="5"/> <span>5x </span> <?php echo number_format($x5, 2, ',', '.' ); ?></br>
                            <br><input name="vezes" type="radio" value="6"/> <span>6x </span> <?php echo number_format($x6, 2, ',', '.' ); ?></br>
                            <br><input name="vezes" type="radio" value="7"/> <span>7x </span> <?php echo number_format($x7, 2, ',', '.' ); ?></br>
                            <br><input name="vezes" type="radio" value="8"/> <span>8x </span> <?php echo number_format($x8, 2, ',', '.' ); ?></br>
                            <br><input name="vezes" type="radio" value="9"/> <span>9x </span> <?php echo number_format($x9, 2, ',', '.' ); ?></br>
                            <br><input name="vezes" type="radio" value="10"/><span>10x </span><?php echo number_format($x10, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="11"/><span>11x </span><?php echo number_format($x11, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="12"/><span>12x </span><?php echo number_format($x12, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="13"/><span>13x </span><?php echo number_format($x13, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="14"/><span>14x </span><?php echo number_format($x14, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="15"/><span>15x </span><?php echo number_format($x15, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="16"/><span>16x </span><?php echo number_format($x16, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="17"/><span>17x </span><?php echo number_format($x17, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="18"/><span>18x </span><?php echo number_format($x18, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="19"/><span>19x </span><?php echo number_format($x19, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="20"/><span>20x </span><?php echo number_format($x20, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="21"/><span>21x </span><?php echo number_format($x21, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="22"/><span>22x </span><?php echo number_format($x22, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="23"/><span>23x </span><?php echo number_format($x23, 2, ',', '.' );?></br>
                            <br><input name="vezes" type="radio" value="24"/><span>24x </span><?php echo number_format($x24, 2, ',', '.' );?></br>
                        </tr>
                        <td><?php echo $row; ?></td>
                    </div>
                    <input type="submit" value="cadastrar">
                </form>
            </div>
        </form>
    </body>
</html>