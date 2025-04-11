<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'biblio') {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Livro</title>
</head>
<body>
    <h2>Cadastrar Livro</h2>
    <form action="salvar_livro.php" method="post">
        Título: <input type="text" name="titulo"><br>
        Autor: <input type="text" name="autor"><br>
        Editora: <input type="text" name="editora"><br>
        ISBN: <input type="text" name="isbn"><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="dashboard.php">Voltar ao Dashboard</a>
</body>
</html>