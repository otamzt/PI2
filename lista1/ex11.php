<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Sequência de Collatz</h1>
    <?php
    $numero = 19;
    echo "<p>Número inicial: $numero</p>";

    while ($numero != 1) 
    {
        if ($numero % 2 == 0) 
        {
            $numero /= 2;
        } 
        else 
        {
            $numero = $numero * 3 + 1;
        }
        echo "<p>$numero</p>";
    }
    ?>
</body>
</html>
