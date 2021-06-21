<?php
    require('connection.php');
    session_start();
    $getCpf = addslashes($_POST['consultaCpf']);

    try{
	    if(!empty($getCpf)) 
	    {		
	    	$sql = mysqli_query($conn, "SELECT * FROM clientes WHERE cpf = '{$getCpf}'") or print mysql_error();
	   		if(mysqli_num_rows($sql)>0)
	   		{
	        	echo json_encode(array(header('Location: ../logar.php')));
	        	$_SESSION['msg'] = "CPF já cadastrado!"; 
	    	}
	    	else
	    	{
                header('Location: ../cadastro.php');
                $_SESSION['msg'] = "Seja bem vindo, cadestre-se para continuar!";   
            }
			  	
		}	
	}
	catch(Exception $msg)
	{
	echo $msg->getMessage();
	}

?>