<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Contar Números Divisíveis por 3 e 5 entre 1 e 500</h1>
    <?php
    $contador = 0;
    for ($i = 1; $i <= 500; $i++) 
    {
        if ($i % 3 == 0 && $i % 5 == 0) 
        {
            $contador++;
        }
    }
    echo "<p>O número de valores entre 1 e 500 que são divisíveis por 3 e por 5 ao mesmo tempo é: $contador</p>";
    ?>
</body>
</html>
