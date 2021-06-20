<?php
    @session_start();
    try
    {
        if(empty($_POST['valorEmprest'])) {
            $_SESSION['msg'] = 'Campos em branco!';
            header('Location: ../proposta.php');
            exit();
        }
        $ve = mysqli_real_escape_string($conn, $_POST['valorEmprest']);
        $iofc= (($ve / 100 * 0.082)-$ve +$ve);
        $query = "SELECT * FROM clientes where cpf = '$_SESSION[cpf]'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        $sala = $result->fetch_array()['salario'];
        if($row == 1)
        {
            $soma = array(  "1"=> (($iofc / 1 )+ (($ve / 1) + ($ve / 100 * 1.2))),
                            "2"=> (($iofc / 2 )+ (($ve / 2) + ($ve / 100 * 1.2))),
                            "3"=> (($iofc / 3 )+ (($ve / 3) + ($ve / 100 * 1.3))),
                            "4"=> (($iofc / 4 )+ (($ve / 4) + ($ve / 100 * 1.4))),
                            "5"=> (($iofc / 5 )+ (($ve / 5) + ($ve / 100 * 1.5))),
                            "6"=> (($iofc / 6 )+ (($ve / 6) + ($ve / 100 * 1.6))),
                            "7"=> (($iofc / 7 )+ (($ve / 7) + ($ve / 100 * 1.7))),
                            "8"=> (($iofc / 8 )+ (($ve / 8) + ($ve / 100 * 1.8))),
                            "9"=> (($iofc / 9 )+ (($ve / 9) + ($ve / 100 * 1.9))),
                            "10"=>(($iofc / 10) + (($ve / 10) + ($ve / 100 * 2)  )),
                            "11"=>(($iofc / 11) + (($ve / 11) + ($ve / 100 * 2.1))),
                            "12"=>(($iofc / 12) + (($ve / 12) + ($ve / 100 * 2.2))),
                            "13"=>(($iofc / 13) + (($ve / 13) + ($ve / 100 * 2.3))),
                            "14"=>(($iofc / 14) + (($ve / 14) + ($ve / 100 * 2.4))),
                            "15"=>(($iofc / 15) + (($ve / 15) + ($ve / 100 * 2.5))),
                            "16"=>(($iofc / 16) + (($ve / 16) + ($ve / 100 * 2.6))),
                            "17"=>(($iofc / 17) + (($ve / 17) + ($ve / 100 * 2.7))),
                            "18"=>(($iofc / 18) + (($ve / 18) + ($ve / 100 * 2.8))),
                            "19"=>(($iofc / 19) + (($ve / 19) + ($ve / 100 * 2.9))),
                            "20"=>(($iofc / 20) + (($ve / 20) + ($ve / 100 * 3)  )),
                            "21"=>(($iofc / 21) + (($ve / 21) + ($ve / 100 * 3.1))),
                            "22"=>(($iofc / 22) + (($ve / 22) + ($ve / 100 * 3.2))),
                            "23"=>(($iofc / 23) + (($ve / 23) + ($ve / 100 * 3.4))),
                            "24"=>(($iofc / 24) + (($ve / 24) + ($ve / 100 * 3.5))),
                        );
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