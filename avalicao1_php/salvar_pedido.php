<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'professor') {
    header("Location: index.php");
    exit;
}

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$isbn = $_POST['isbn'];

$linha = "$titulo|$autor|$editora|$isbn\n";

file_put_contents('pedidos.txt', $linha, FILE_APPEND);

header("Location: dashboard.php");
exit;
?>