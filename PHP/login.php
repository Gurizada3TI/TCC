<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Vulcan</title>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">V U L C A N</a>
        <nav class="navbar">
            <a href="../HTML/home.html">Home</a>
            <a href="../HTML/store.html">Store</a>
            <a href="../HTML/foruns.html">Foruns</a>
            <a href="../HTML/reviews.html">Reviews</a>
            <a href="../PHP/register.php">Account</a>
        </nav>
    </header>

    <h1>Login</h1>
    <form action="processa_login.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
    <p>Ainda não tem uma conta? <a href="register.php">Registre-se aqui</a></p>
    
</body>
</html>