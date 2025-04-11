<?php
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

if (($login == 'professor' && $senha == 'professor') || ($login == 'biblio' && $senha == 'biblio')) {
    $_SESSION['usuario'] = $login;
    header("Location: dashboard.php");
} else {
    echo "Login inválido.";
}
exit;
?>