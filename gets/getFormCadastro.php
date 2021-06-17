<?php
	require('../db/connection.php');
	session_start();
	$nome = addslashes($_POST['nomeCliente']);
    $snome = addslashes($_POST['sobrenomeCliente']);
    $nasci = addslashes($_POST['nascimento']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $csenha = addslashes($_POST['csenha']);
    $CPF = addslashes($_POST['CPF']);
    $salario = addslashes($_POST['salario']);
    try{
	    if(!empty($nome) && !empty($snome) && !empty($nasci) && !empty($email) && !empty($senha) && !empty($csenha) && !empty($CPF) && !empty($salario)) 
	    {		
	    	$sql = mysqli_query($conn, "SELECT * FROM clientes WHERE cpf = '{$CPF}'") or print mysql_error();
	   		if(mysqli_num_rows($sql)>0)
	   		{
	        	echo json_encode(array(header('Location: ../logar.php')));
	        	$_SESSION['msg'] = "CPF já cadastrado!"; 
	    	}
	    	else
	    	{
			  	if($senha == $csenha)
			  	{
			      	$testa= ("SELECT email FROM clientes WHERE email");
					if($testa == $email)
						{
							$_SESSION['msg'] = "Email  já cadastrado!";
							header('Location: ../cadastro.php');
						}
						else
						{
							$sql = ("INSERT INTO clientes (cpf, nome_cliente, sobrenome_cliente, email, senha,  nascimento, salario) VALUES ('$CPF','$nome','$snome','$email','$senha','$nasci','$salario')");
							$res=mysqli_query($conn,$sql);
							$linhas= mysqli_affected_rows($conn);
							$_SESSION['msg'] = "Cadastrado com sucesso!";
							header('Location: ../logar.php');
						}
				}
                else
                { 
                $_SESSION['msg'] = "Senhas não coecidem!";
                header('Location: ../cadastro.php');
        
                }
			}
		}	
	}
	catch(Exception $msg)
	{
	echo $msg->getMessage();
	}
?>