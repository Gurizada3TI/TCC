<?php
session_start();
$conn = new mysqli("localhost", "root", "", "jogo_store");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$conn->query("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
header("Location: login.php");
?>
