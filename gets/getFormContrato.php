<?php
	require('../db/connection.php');
	session_start();
    $valor = addslashes($_SESSION['valorEmp']);
    $cpf = addslashes($_SESSION['cpf']);
    $vezes = addslashes($_SESSION['vezes']);
    $venci = $_SESSION['dataVenc'];
    $iof = addslashes($_SESSION['iof']);
    $mensalidade = addslashes($_SESSION['mensalidade']);
    $s = 3;
    try{
	    if(!empty($valor) && !empty($cpf) && !empty($vezes) && !empty($venci) && !empty($iof) && !empty($mensalidade)) 
	    {		
	    	$sql = ("INSERT INTO emprestimo (valor_solicitado, vezes, mensalidade, data_vencimento, clientes_cpf, iof, situacao) VALUES ('$valor','$vezes','$mensalidade','$venci','$cpf','$iof','$s')");
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