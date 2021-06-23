<?php
    $consultaDivida = "SELECT * FROM dividas WHERE cpf = '{$_SESSION['cpf']}'" or print mysql_error();
    $conD = mysqli_query($conn,$consultaDivida);
    $consultaEmprestimo = "SELECT * FROM emprestimo WHERE clientes_cpf = '{$_SESSION['cpf']}'" or print mysql_error();
    $conE = mysqli_query($conn,$consultaEmprestimo);
?>