<?php
session_start();
$conn = new mysqli("localhost", "root", "", "jogo_store");
$userId = $_SESSION['user_id'];

$biblioteca = $conn->query("SELECT jogos.* FROM biblioteca JOIN jogos ON biblioteca.jogo_id = jogos.id WHERE biblioteca.usuario_id = $userId");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Minha Biblioteca</title>
</head>
<body>
    <h1>Minha Biblioteca</h1>
    <ul>
        <?php while($row = $biblioteca->fetch_assoc()): ?>
            <li><?php echo $row['nome']; ?> - <a href="download.php?id=<?php echo $row['id']; ?>">Baixar</a></li>
        <?php endwhile; ?>
    </ul>
    <a href="index.php">Voltar para a loja</a>
</body>
</html>
