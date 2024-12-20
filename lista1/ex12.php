<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Soma de Números Ímpares entre 1 e 200</h1>
    <?php
    $soma = 0;

    for ($i = 1; $i <= 200; $i++) 
    {
        if ($i % 2 != 0) 
        {
            $soma += $i;
        }
    }
    echo "<p>A soma de todos os números ímpares entre 1 e 200 é: $soma</p>";
    ?>
</body>
</html>
