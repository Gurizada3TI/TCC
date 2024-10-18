<?php
session_start();
$conn = new mysqli("localhost", "root", "", "jogo_store");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$jogoId = $_GET['id'];
$jogo = $conn->query("SELECT * FROM jogos WHERE id = $jogoId")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $jogo['nome']; ?></title>
</head>
<body>
    <h1><?php echo $jogo['nome']; ?></h1>
    <p>Preço: R$<?php echo $jogo['preco']; ?></p>
    <button onclick="addToCart(<?php echo $jogo['id']; ?>)">Adicionar ao Carrinho</button>
    <button onclick="buyNow(<?php echo $jogo['id']; ?>)">Comprar Agora</button>

    <script>
        function addToCart(jogoId) {
            fetch('add_to_cart.php?id=' + jogoId)
                .then(response => response.text())
                .then(data => alert(data));
        }

        function buyNow(jogoId) {
            fetch('buy_now.php?id=' + jogoId)
                .then(response => response.text())
                .then(data => alert(data));
        }
    </script>
</body>
</html>
