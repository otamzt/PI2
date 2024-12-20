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
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $numero = intval($_POST['numero']);
        if ($numero < 10) 
        {
            echo ("<p>Você é uma criança.</p>");
        } 
        elseif($numero < 18 ) 
        {
            echo ("<p>Você é um adolescente.</p>");
        }
        elseif($numero < 50) 
        {
            echo ("<p>Você é um adulto.</p>");
        }
        else
        {
            echo ("<p>Você é um idoso.</p>");
        }
    }
    ?>
</body>
</html>
