@session_start();
include('db/conection.php');
try{

	if(empty($_POST['email_login']) || empty($_POST['senha_login'])) {
		$_SESSION['e'] = 'Campos em branco!';
		header('Location: logar.php');
		exit();
	}
	$email = mysqli_real_escape_string($conn, $_POST['email_login']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha_login']);
	$query = "SELECT * FROM funcionarios where email_func = '$email' and senha_func = '$senha'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_num_rows($result);
	$rowS= mysqli_fetch_assoc($result);
	
	if($row == 1)
	{
		$_SESSION['usuario'] = $email;
		$_SESSION['nome'] = $rowS['nome_func'];
		header('Location: painel.php');
		exit();
	}
	else
	{
		$_SESSION['usuario'] = null;
		$_SESSION['e'] = "Usuario invalido";
		header('Location: logar.php');
		exit();
	}
} catch(Exception $e){
	echo $e->getMessage();
}
?>