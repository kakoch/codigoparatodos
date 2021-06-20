<?php
    session_start();
    @include('connection.php');
    $valor = addslashes($_SESSION['valorEmp']);
    $vezes = addslashes($_POST['vezes']);
    $CPF = addslashes($_POST['cpf']);
    $salario = addslashes($_SESSION['salario']);
    $iof = ((($valor / 100 * 0.082)-$valor) + $valor);
    $mensalidade = addslashes($_POST[$_SESSION['id']]);
    $hoje = date('d/m/Y');
    $dataVenc = addslashes($_POST['dataVenc']);
    $_SESSION['vezes']= $vezes;
    $_SESSION['mensalidade']= $mensalidade;
    $_SESSION['data_vencimento']= $dataVenc;
    $_SESSION['cpf']=$CPF;
    $_SESSION['iof']=$iof;

    try
    {
        if(!empty($_SESSION['valorEmp']) && !empty($vezes) && !empty($CPF))
        {   
            unset($_SESSION['msg']);
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
                unset($_SESSION['msg']);
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