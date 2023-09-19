<?php
session_start();
// Se não existir uma seção login, vá para index.php
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nome']) && isset($_POST['ra']) && isset($_POST['placa'])) {
        $nome = $_POST['nome'];
        $ra = $_POST['ra'];
        $placa = $_POST['placa'];

        $dados = "$nome|$ra|$placa";

        file_put_contents("alunos.txt", $dados . PHP_EOL, FILE_APPEND);

        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Preencha todos os campos do formulário.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros dos Alunos</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome completo do aluno</label>
        <input type="text" name="nome" required>
        <br>
        <label for="ra">Registro acadêmico(RA):</label>
        <input type="text" name="ra" required>
        <br>
        <label for="placa">Placa do carro/moto</label>
        <input type="text" name="placa" required>
        <br>

        <input type="submit" value="Enviar informações">
    </form>
</body>
</html>
