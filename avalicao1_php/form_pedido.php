<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'professor') {
    header("Location: index.php");
    exit;
}
?>
<form action="cadastrar_pedido.php" method="post">
    <input type="text" name="titulo" placeholder="Título" required><br>
    <input type="text" name="autor" placeholder="Autor" required><br>
    <input type="text" name="editora" placeholder="Editora" required><br>
    <input type="text" name="isbn" placeholder="ISBN" required><br>
    <input type="submit" value="Cadastrar">
</form>
<a href="dashboard.php">Voltar</a>