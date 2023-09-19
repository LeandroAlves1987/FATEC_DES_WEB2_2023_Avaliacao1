<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}

echo "Bem-vindo, " . $_SESSION['login'] . "!<br>";
    echo "<a href='cadastros.php'>Cadastrar carro</a><br>";
    echo "<a href='alunos.txt'>Listar Alunos</a><br>";
    echo "<a href='logout.php'>Logout</a>";
?>