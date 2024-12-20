<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 4</title>
</head>
<body>
    <form method="post" action="">
        <label for="numero">Digite sua idade:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = intval($_POST['numero']);
        if ($numero % 2 == 0) {
            echo "<p>O número $numero é par.</p>";
        } else {
            echo "<p>O número $numero é ímpar.</p>";
        }
    }
    ?>
</body>
</html>
