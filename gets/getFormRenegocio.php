<?php
	require('../db/connection.php');
	session_start();
	$vezes = addslashes($_POST['vezes']);
    $id_divida = $_SESSION['id_divida'];
    $valor_divida= $_SESSION['valor_divida'];
    $novo_valor = ((($valor_divida / 100)*1)+ $valor_divida);
    $valor_parcela  = ($novo_valor / $vezes);
    $cpf= $_SESSION['cpf'];
    $situacao = $_SESSION['situacao'];
    $s = 3;

    try{
	    if(!empty($vezes) && !empty($id_divida) && !empty($valor_divida) && !empty($novo_valor) && !empty($valor_parcela) && !empty($cpf) && !empty($situacao))
        {		
	    	$sql = mysqli_query($conn, "SELECT * FROM dividas WHERE codigo_divida = '{$id_divida}'") or print mysql_error();
	   		if(mysqli_num_rows($sql)>1)
	   		{
	        	echo json_encode(array(header('Location: ../logar.php')));
	        	$_SESSION['msg'] = "Divida já renegociada!";
	    	}
	    	else
	    	{
                $sql2=("UPDATE dividas SET situacao = '$s' WHERE codigo_divida ='$id_divida'") or print mysql_error();;
                $sql = ("INSERT INTO renegocio (vezes, novo_valor_divida, clientes_cpf, valor_parcela, dividas_codigo_divida,  situacao)
                        VALUES ('$vezes','$novo_valor','$cpf','$valor_parcela','$id_divida','$s')")or print mysql_error();;
                $res=mysqli_query($conn,$sql);                
                $res2=mysqli_query($conn,$sql2);                
                unset($_SESSION['msg']);
                $_SESSION['msg'] = "Renegociado com sucesso!".$vezes."|". $novo_valor."|". $cpf."|". $id_divida."|". $s;
                header('Location: ../dividas.php');
			}
        }
        else
        {	
            unset($_SESSION['msg']);
            $_SESSION['msg'] = "Não é possivel renegociar!";
            header('Location: ../dividas.php');

        }
	}
	catch(Exception $msg)
	{
		echo $msg->getMessage();
	}
?>