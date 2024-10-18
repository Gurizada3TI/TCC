<?php
session_start();
$conn = new mysqli("localhost", "root", "", "jogo_store");
$userId = $_SESSION['user_id'];

$carrinho = $conn->query("SELECT jogos.*, carrinho.quantidade FROM carrinho JOIN jogos ON carrinho.jogo_id = jogos.id WHERE carrinho.usuario_id = $userId");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
</head>
<body>
    <h1>Carrinho</h1>
    <ul>
        <?php $total = 0; ?>
        <?php while($row = $carrinho->fetch_assoc()): ?>
            <li><?php echo $row['nome']; ?> - R$<?php echo $row['preco']; ?> (<?php echo $row['quantidade']; ?>)</li>
            <?php $total += $row['preco'] * $row['quantidade']; ?>
        <?php endwhile; ?>
    </ul>
    <h2>Total: R$<?php echo $total; ?></h2>
    <form action="processa_compra.php" method="POST">
        <input type="hidden" name="total" value="<?php echo $total; ?>">
        <button type="submit">Finalizar Compra</button>
    </form>
</body>
</html>
