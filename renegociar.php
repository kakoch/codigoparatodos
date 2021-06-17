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
                        $id = $_GET['id'];
                        require('db/connection.php');
                        $consulta = "SELECT valor_divida FROM dividas WHERE codigo_divida = '{$id}'" or print mysql_error();
                        $con = mysqli_query($conn,$consulta);
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        $row = $con->fetch_array()['valor_divida'];
                        $x5 = 1.2;
                        $cinco = (($row + ($row / 100 * $x5)) / 5);
                        $x6 = 1.4;
                        $seis = (($row + ($row / 100 * $x6)) / 6);
                        $x7 = 1.6;
                        $sete = (($row + ($row / 100 * $x7)) / 7);
                        $x8 = 1.8;
                        $oito = (($row + ($row / 100 * $x8)) / 8);
                        $x9 = 1.9;
                        $nove = (($row + ($row / 100 * $x9)) / 9);
                        $x10 = 2;
                        $dez = (($row + ($row / 100 * $x7)) / 10);
                        $x11 = 2.2;
                        $onze = (($row + ($row / 100 * $x11)) / 11);
                        $x12 = 2.3;
                        $doze = (($row + ($row / 100 * $x12)) / 12);
                        $x24 = 4;
                        $vinte4 = (($row + ($row / 100 * $x24)) / 24);
                    ?>
                </div>
                
                <form action="gets/" method="post">
                    <div>
                            <input name="vezes" type="radio" value="5"><?php echo $cinco; ?></input>
                            <input name="vezes" type="radio" value="6"><?php echo $seis; ?></input>
                            <input name="vezes" type="radio" value="7"><?php echo $sete; ?></input>
                            <input name="vezes" type="radio" value="8"><?php echo $oito; ?></input>
                            <input name="vezes" type="radio" value="9"><?php echo $nove; ?></input>
                            <input name="vezes" type="radio" value="10"><?php echo $dez; ?></input>
                            <input name="vezes" type="radio" value="11"><?php echo $onze; ?></input>
                            <input name="vezes" type="radio" value="12"><?php echo $doze; ?></input>
                            <input name="vezes" type="radio" value="24"><?php echo $vinte4; ?></input>
                        </select>
                        <td><?php echo $row; ?></td>
                    </div>
                    <input type="submit" value="cadastrar">
                </form>
            </div>
        </form>
    </body>
</html>