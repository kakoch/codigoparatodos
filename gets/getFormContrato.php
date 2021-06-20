<?php
	require('../db/connection.php');
	session_start();
    $valor = addslashes($_SESSION['valorEmp']);
    $cpf = addslashes($_SESSION['cpf']);
    $vezes = addslashes($_SESSION['vezes']);
    $venci = addslashes($_SESSION['data_vencimento']);
    $iof = addslashes($_SESSION['iof']);
    $mensalidade = addslashes($_SESSION['mensalidade']);
    try{
	    if(!empty($valor) && !empty($cpf) && !empty($vezes) && !empty($venci) && !empty($iof) && !empty($mensali)) 
	    {		
	    	$sql = ("INSERT INTO emprestimo (valor_solicitado, vezes, mensalidade, data_vencimento, clientes_cpf, iof) VALUES ('$valor','$vezes','$mensali','$venci','$cpf','$iof')");
            $res=mysqli_query($conn,$sql);
            $_SESSION['msg'] = "Emprestimo cadastrado com sucesso!";
            header('Location: ../dividas.php');
        }
	    else
	    {
            unset($_SESSION['msg']);
            $_SESSION['msg'] = "Emprestimo não cadastrado!";
            header('Location: ../proposta.php');
    
		}
	}
	catch(Exception $msg)
	{
	    echo $msg->getMessage();
	}
?>