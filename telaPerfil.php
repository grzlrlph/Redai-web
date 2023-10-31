<?php
    include_once('conexao.php');

       if(!empty($_POST['username']))
       {
           $username = $_POST['username'];
           $sqlSelect = "SELECT * FROM usuarios WHERE username=$username";
           $result = $conexao->query($sqlSelect);  
           
           if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $username = $user_data['username'];
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
                $fotoPerfil = $user_data['fotoPerfil'];
                $tipoFoto = $user_data['tipoFoto'];  
            }
        }
        else
        {
            header('Location: index.php');
        }
        }else{
            header('Location: index.php');
           }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Perfil</title>
</head>
<body>
    <forms action="processaAlteracao.php" method="POST">
        <label for="FotoPerfil">Foto de Perfil</label>    
        <input type="file" name=FotoPerfil value=<img src="<?php echo $fotoPerfil?>">

        <label for="nomeCompleto">Nome Completo</label>
        <input type="text" name="nomeCompleto" placeholder="Seu nome completo" value=<?php echo $nome;?>>

        <label for="username">Nome de Usuário</label>
        <input type="text" name="username" placeholder="Seu nome de usuário" value=<?php echo $username;?>>

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Seu email" value=<?php echo $email;?>>

        <label for="senha">Senha</label>
        <input type="text" name="senha" placeholder="Sua senha" value=<?php echo $senha;?>>

        <label for="confirmarSenha">Confirmar Senha</label>
        <input type="text" name="confirmarSenha" placeholder="Confirme sua senha">

        <input type="submit" name="update" id="submit" placeholder="enviar">
        </forms>

        <button href='deletePerfil.php?username=$_SESSION["usuarioUsername"]'>Deletar conta</button>

    
</body>
</html>