<?php
session_start();
$conn = new mysqli("localhost", "root", "", "jogo_store");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM jogos");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Loja de Jogos</title>
</head>
<body>
    <h1>Jogos Disponíveis</h1>
    <ul>
        <?php while($row = $result->fetch_assoc()): ?>
            <li>
                <a href="jogo.php?id=<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></a> - R$<?php echo $row['preco']; ?>
            </li>
        <?php endwhile; ?>
    </ul>
    <a href="carrinho.php">Ver Carrinho</a>
    <a href="biblioteca.php">Minha Biblioteca</a>
    <a href="login.php">Login</a>
    <a href="logout.php">Logout</a>
</body>
</html>
