<?php
    session_start();
    

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //config do banco
        include_once('conexao.php');

        //variáveis que armazenam o que vem do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //validação do login
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' LIMIT 1";
        $result = $conexao->query($sql);
        
        //verifica se existe uma conta com o e-mail e a senha informados
        if (mysqli_num_rows($result)<1){
            unset($_SESSION['$email']);
            unset($_SESSION['$senha']);
            header ('Location: /redai/login.php');
        }else{
            $_SESSION['email']=$email;
            $_SESSION['senha']=$senha;
            $SESSION['fotoPerfil']=$fotoPerfil;
            $SESSION['tipoFoto']=$tipoFoto;
            //print_r($_SESSION);
            header ('Location: /redai/index.php');
            
        }
    }else{
        header('Location: /redai/login.php');
    }

?>