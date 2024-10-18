<?php

    if(isset($_POST["submit"]))
    {
       // print_r($_POST['nome']);
       // print_r($_POST['email']);
       // print_r($_POST['senha']);
        
       include_once('config.php');

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $senha = $_POST['senha'];

       $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES('$nome','$email','$senha')");
       header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Vulcan</title>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">V U L C A N</a>
        <nav class="navbar">
            <a href="../PHP/sistema.php">Home</a>
            <a href="../HTML/store.html">Store</a>
            <a href="../HTML/foruns.html">Foruns</a>
            <a href="../HTML/reviews.html">Reviews</a>
            <a href="../HTML/login.html">Account</a>
        </nav>
    </header>

    <form action="processa_register.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <button type="submit">Registrar</button>
        <a href="login.php">login </a>
    </form>
    
</body>

</html>