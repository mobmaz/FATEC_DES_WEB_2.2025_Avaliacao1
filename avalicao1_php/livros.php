<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

$livros = file('livros.txt', FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Livros</title>
</head>
<body>
    <h2>Lista de Livros</h2>
    <ul>
        <?php foreach ($livros as $livro): ?>
            <?php list($titulo, $autor, $editora, $isbn) = explode('|', $livro); ?>
            <li>
                <strong>Título:</strong> <?php echo $titulo; ?><br>
                <strong>Autor:</strong> <?php echo $autor; ?><br>
                <strong>Editora:</strong> <?php echo $editora; ?><br>
                <strong>ISBN:</strong> <?php echo $isbn; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="dashboard.php">Voltar ao Dashboard</a>
</body>