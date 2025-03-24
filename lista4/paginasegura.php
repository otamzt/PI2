<?php

session_start();
if (!isset($_SESSION['usuario']) && !isset($_COOKIE['usuario'])) {
    header("Location: paginasegura.php");
    exit();
}
?>

<html>
<head>
    <title>Página Segura</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : $_COOKIE['usuario']; ?>!</h2>
    <p>Você está em uma área restrita.</p>
    <a href="logout.php">Sair</a>
</body>
</html>
