<?php
session_start();
$conn = new mysqli("localhost", "root", "", "jogo_store");
$userId = $_SESSION['user_id'];
$jogoId = $_GET['id'];

// Lógica para comprar diretamente
$conn->query("INSERT INTO compras (usuario_id, jogo_id) VALUES ($userId, $jogoId)");
$conn->query("INSERT INTO biblioteca (usuario_id, jogo_id) VALUES ($userId, $jogoId) ON DUPLICATE KEY UPDATE jogo_id = jogo_id");
echo "Compra realizada com sucesso!";
?>
