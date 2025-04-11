<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $usuario; ?>!</h2>
    <?php if ($usuario == 'biblio'): ?>
        <a href="cadastrar_livro.php">Cadastrar Livro</a> |
        <a href="pedidos.php">Visualizar Pedidos</a>
    <?php endif; ?>
    <?php if ($usuario == 'professor'): ?>
        <a href="form_pedido.php">Cadastrar Pedido</a>
        <!-- <a href="pedidos.php">Visualizar Pedidos</a> -->
    <?php endif; ?>
    <a href="livros.php">Visualizar Livros</a> |
    <a href="logout.php">Logout</a>
</body>
</html>