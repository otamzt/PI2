<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $numero = intval($_POST['numero']);
        $primo = true;

        if ($numero <= 1) 
        {
            $primo = false;
        } 
        else 
        {
            for ($i = 2; $i <= sqrt($numero); $i++)
            {
                if ($numero % $i == 0) {
                    $primo = false;
                    break;
                }
            }
        }

        if ($primo) 
        {
            echo "<p>$numero é um número primo.</p>";
        } 
        else 
        {
            echo "<p>$numero não é um número primo.</p>";
        }
    }
    ?>
</body>
</html>
