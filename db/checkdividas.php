<?php
   include('connection.php');
    @session_start();
    $valor= $_POST['valorEmprest'];
    try
    {
        if(empty($valor)) {
            $_SESSION['msg'] = 'Campos em branco!';
            header('Location: ../proposta.php');
            exit();
        }
        $query = "SELECT * FROM dividas where cpf = '$_SESSION[cpf]'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        $sala = $result->fetch_array();
        if($row >= 1)
        {
            $sum = 0;
            foreach ($result as $key => $value){
            $sum += $value['valor_divida'];
        }
            echo $sum;
        }   
        else
        {
            $_SESSION['msg'] = "Salario não informado";
            header('Location: ../logar.php');
            exit();
        }
    }catch(Exception $msg)
    {
        echo $msg->getMessage();
    }
?>