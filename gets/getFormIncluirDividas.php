<?php
	require('../db/connection.php');
	session_start();
	$nome = addslashes($_POST['nomeEmpresa']);
    $cnpj = addslashes($_POST['cnpj']);
    $divida = addslashes($_POST['divida']);
    $cpf = addslashes($_POST['cpf']);
    $numeroCobra = addslashes($_POST['ncobra']);
    try{
	    if(!empty($nome) && !empty($cnpj) && !empty($divida) && !empty($cpf) && !empty($ncobra)) 
	    {		
	    	$sql = mysqli_query($conn, "SELECT * FROM dividas WHERE n_cobra = '{$numeroCobra}'") or print mysql_error();
	   		if(mysqli_num_rows($sql)>0)
	   		{
	        	echo json_encode(array(header('Location: ../index.php')));
	        	$_SESSION['msg'] = "Divida já cadastrada!"; 
	    	}
	    	else
	    	{
                $sql = ("INSERT INTO clientes (cpf, nome_cliente, sobrenome_cliente, email, senha,  nascimento) VALUES ('$CPF','$nome','$snome','$email','$senha','$nasci')");
                $res=mysqli_query($conn,$sql);
                $linhas= mysqli_affected_rows($conn);
                $_SESSION['msg'] = "Divida cadastrada com sucesso!";
                header('Location: ../index.php.php');
			}
        }
		else
        { 
            $_SESSION['msg'] = "Erro interno!";
            header('Location: ../index.php');
        }
	}
	catch(Exception $msg)
	{
	echo $msg->getMessage();
	}
?>