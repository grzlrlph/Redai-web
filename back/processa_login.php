<?php
    session_start();
    

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //config do banco
        include_once('conexao.php');

        //var
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //validação do login
        $sqlValidaLogin = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $result = $conexao->query($sqlValidaLogin);
        if (mysqli_num_rows($result)<1){
            unset($_SESSION['$email']);
            unset($_SESSION['$senha']);
            header ('Location: /redai/login.html');
        }else{
            $_SESSION['email']=$email;
            $_SESSION['senha']=$senha;
            
            
           
            header ('Location: /redai/index.php');
        }
    }else{
        header('Location: /redai/login.html');
    }

?>