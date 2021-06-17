<?php 
@session_start();
require('../db/connection.php');
try{

	if(empty($_POST['cpf']) || empty($_POST['senha'])) {
		$_SESSION['msg'] = 'Campos em branco!';
		header('Location: logar.php');
		exit();
	}
	$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $query = "SELECT * FROM clientes where cpf = '$cpf' and senha = '$senha'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_num_rows($result);
	$rowS= mysqli_fetch_assoc($result);
	
	if($row == 1)
	{
		$_SESSION['usuario'] = $nome;
		$_SESSION['cpf'] = $cpf;
		header('Location: ../dividas.php');
		exit();
	}
	else
	{
		$_SESSION['usuario'] = '';
		$_SESSION['msg'] = "Usuario invalido";
		header('Location: ../logar.php');
		exit();
	}
} catch(Exception $msg){
	echo $msg->getMessage();
}
?>