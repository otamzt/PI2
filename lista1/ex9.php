<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular Fatorial</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $numero = intval($_POST['numero']);
        $fatorial = 1;

        if ($numero < 0) 
        {
            echo "<p>O fatorial não é definido para números negativos.</p>";
        } 
        else 
        {
            for ($i = 1; $i <= $numero; $i++) 
            {
                $fatorial *= $i;
            }
            echo "<p>O fatorial de $numero é: $fatorial</p>";
        }
    }
    ?>
</body>
</html>
