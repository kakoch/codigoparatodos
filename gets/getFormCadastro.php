<?php
	require('../db/connection.php');
	session_start();
	$nome = addslashes($_POST['nomeCliente']);
    $snome = addslashes($_POST['sobrenomeCliente']);
    $sexo = addslashes($_POST['sexo']);
    $nasci = addslashes($_POST['nascimento']);
    $endereco = addslashes($_POST['endereco']);
    $complemento = addslashes($_POST['complemento']);
    $nresidencia = addslashes($_POST['nresidencia']);
    $bairro = addslashes($_POST['bairro']);
    $cidade = addslashes($_POST['cidade']);
    $estado = addslashes($_POST['estado']);
    $pais = addslashes($_POST['pais']);
    $cep = addslashes($_POST['cep']);
    $profissao = addslashes($_POST['profissao']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $csenha = addslashes($_POST['csenha']);
    $CPF = addslashes($_POST['CPF']);
    $salario = addslashes($_POST['salario']);
    try{
	    if(!empty($nome) && !empty($snome) && !empty($nasci) && !empty($email) && !empty($senha) && !empty($csenha) && !empty($CPF) && !empty($salario)
			&& !empty($sexo) && !empty($endereco) && !empty($complemento) && !empty($nresidencia) && !empty($bairro) && !empty($cidade) && !empty($estado) && !empty($pais) && !empty($profissao) && !empty($cep)) 
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
						unset($_SESSION['msg']);
						$_SESSION['msg'] = "Email  já cadastrado!";
						header('Location: ../cadastro.php');
					}
					else
					{
						$sql = ("INSERT INTO clientes (nome_cliente, sobrenome_cliente, email, cpf, senha,  nascimento, salario, endereco, nresidencia, cidade, estado, bairro, pais, cep, complemento, profissao, sexo)
									VALUES ('$nome','$snome','$email','$CPF','$senha','$nasci','$salario','$endereco','$nresidencia','$cidade','$estado','$bairro','$pais','$cep','$complemento','$profissao','$sexo')");
						$res=mysqli_query($conn,$sql);
						$linhas= mysqli_affected_rows($conn);
						unset($_SESSION['msg']);
						$_SESSION['msg'] = "Cadastrado com sucesso!";
						header('Location: ../logar.php');
					}
				}
                else
                {	
					unset($_SESSION['msg']);
                	$_SESSION['msg'] = "Senhas não coecidem!";
                	header('Location: ../cadastro.php');
        
                }
			}
		}
		else
		{
			$_SESSION['msg'] = "Campos em branco!";
			header('Location: ../cadastro.php');

		}
	}
	catch(Exception $msg)
	{
		echo $msg->getMessage();
	}
?>