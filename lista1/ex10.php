<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Primeiros 10 números da sequência de Fibonacci</h1>
    <?php
    $n1 = 0;
    $n2 = 1;

    echo "<p>$n1</p>";
    echo "<p>$n2</p>";

    for ($i = 3; $i <= 10; $i++) 
    {
        $next = $n1 + $n2;
        echo "<p>$next</p>";
        $n1 = $n2;
        $n2 = $next;
    }
    ?>
</body>
</html>
