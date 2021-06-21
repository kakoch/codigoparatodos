<?php
    session_start();
    @include('connection.php');
    $valor = addslashes($_SESSION['valorEmp']);
    $vezes = addslashes($_GET['p']);
    $CPF = addslashes($_SESSION['cpf']);
    $salario = addslashes($_SESSION['salario']);
    $iof = ((($valor / 100 * 0.082)-$valor) + $valor);
    $mensalidade = addslashes($_GET['id']);
    $hoje = date('d/m/Y');
    $_SESSION['vezes']= $vezes;
    $_SESSION['mensalidade']= $mensalidade;
    $_SESSION['cpf']=$CPF;
    $_SESSION['iof']=$iof;

    try
    {
        if(!empty($_SESSION['valorEmp']) && !empty($vezes) && !empty($CPF))
        {   
            $_SESSION['msg'] = 'Campos em branco!';
            $query = "SELECT * FROM clientes where cpf = '$CPF'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_num_rows($result);
            if($row == 1)
            {
                $infomacoes = $result->fetch_array();
            }
            else
            {   
                $_SESSION['msg'] = "Salario não informado";
                header('Location: logar.php');
                exit();
            }
        }
    }catch(Exception $msg)
    {
        echo $msg->getMessage();
    }
?>