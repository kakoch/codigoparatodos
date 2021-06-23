<?php
    $consulta = "SELECT * FROM dividas WHERE codigo_divida = '{$id}' AND situacao = '2'" or print mysql_error();
    $con = mysqli_query($conn,$consulta);
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    $s=$con->fetch_array();
    $_SESSION['situacao']= $s['situacao'];
    $row = $s['valor_divida'];
    $_SESSION['valor_divida'] = $row;
    $x = 1;
    $x1 =(($row + ($row / 100 * $x)) / 1);
    $x2 =(($row + ($row / 100 * $x)) / 2);
    $x3 =(($row + ($row / 100 * $x)) / 3);
    $x4 =(($row + ($row / 100 * $x)) / 4);
    $x5 =(($row + ($row / 100 * $x)) / 5);
    $x6 =(($row + ($row / 100 * $x)) / 6);
    $x7 =(($row + ($row / 100 * $x)) / 7);
    $x8 =(($row + ($row / 100 * $x)) / 8);
    $x9 =(($row + ($row / 100 * $x)) / 9);
    $x10=(($row + ($row / 100 * $x)) / 10);
    $x11=(($row + ($row / 100 * $x)) / 11);
    $x12=(($row + ($row / 100 * $x)) / 12);
    $x13=(($row + ($row / 100 * $x)) / 13);
    $x14=(($row + ($row / 100 * $x)) / 14);
    $x15=(($row + ($row / 100 * $x)) / 15);
    $x16=(($row + ($row / 100 * $x)) / 16);
    $x17=(($row + ($row / 100 * $x)) / 17);
    $x18=(($row + ($row / 100 * $x)) / 18);
    $x19=(($row + ($row / 100 * $x)) / 19);
    $x20=(($row + ($row / 100 * $x)) / 20);
    $x21=(($row + ($row / 100 * $x)) / 21);
    $x22=(($row + ($row / 100 * $x)) / 22);
    $x23=(($row + ($row / 100 * $x)) / 23);
    $x24=(($row + ($row / 100 * $x)) / 24);
?>