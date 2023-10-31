<!DOCTYPE html>
<html>
<head>
    <title>Perfil</title>
</head>
<body>
    <form action="alteracao.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value=
        <?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : ''; ?>><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" value=
        <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>><br><br>

        <input type="submit" value="Salvar Alterações">
    </form>
</body>
</html>
