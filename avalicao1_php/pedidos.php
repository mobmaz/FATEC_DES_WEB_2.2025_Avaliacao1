<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'biblio') {
    header("Location: index.php");
    exit;
}

$pedidos = file('pedidos.txt', FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Pedidos</title>
</head>
<body>
    <h2>Lista de Pedidos</h2>
    <ul>
    <?php foreach ($pedidos as $pedido): ?>
        <?php list($titulo, $autor, $editora, $isbn) = explode('|', $pedido); ?>
        <li style="margin-bottom: 15px;">
            <strong>Título:</strong> <?= htmlspecialchars($titulo) ?><br>
            <strong>Autor:</strong> <?= htmlspecialchars($autor) ?><br>
            <strong>Editora:</strong> <?= htmlspecialchars($editora) ?><br>
            <strong>ISBN:</strong> <?= htmlspecialchars($isbn) ?>
        </li>
    <?php endforeach; ?>
</ul>

    <a href="dashboard.php">Voltar ao Dashboard</a>
</body>
</html>