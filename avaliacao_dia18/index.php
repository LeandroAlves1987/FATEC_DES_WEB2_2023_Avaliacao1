<?php
session_start();

// Verifica se há um usuário e uma senha no POST
if (isset($_POST['login'], $_POST['senha'])) {
    // Se o usuário for igual a "portaria" e a senha for igual a "FatecAraras", redirecione para "pagina_login.php"
    if ($_POST['login'] == 'portaria' && $_POST['senha'] == 'FatecAraras') {
        $_SESSION['login'] = $_POST['login'];
        header('Location: pagina_login.php');
    }else{
        echo "Ta errado isso aí, faz de novo! ";
        echo '<input type="button" value="Tentar Novamente" onclick="location.href=\'pagina_login.php\'">';
    }
    exit;
}

if (isset($_GET['erro'])) {
    $erro = 'É necessário fazer login para acessar o sistema!';
}
?>

<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login FATEC ARARAS</title>
</head>
<body>
<h1>Cadastrar Aluno</h1>
    <form action="" method="post">
        <label for="login">Usuário:</label> 
        <input type="text" name="login" required>
        <br>
        <label for="senha">Password:</label>
        <input type="password" name="senha" required><br>
        <input type="submit" value="Login">
    </form>
</body>
<!--O required serve para que o usuario preencha tudo antes de enviar-->
<!--mds que gambiarra-->
</html>

