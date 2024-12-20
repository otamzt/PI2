<?php
function eh_perfeito($num) 
{
    $soma_divisores = 0;
    for ($i = 1; $i <= $num / 2; $i++) 
    {
        if ($num % $i == 0) 
        {
            $soma_divisores += $i;
        }
    }

    return $soma_divisores == $num;
}

echo "Números perfeitos entre 1 e 1000:\n";
for ($n = 1; $n <= 1000; $n++) 
{
    if (eh_perfeito($n)) 
    {
        echo $n . " ";
    }
}
?>
