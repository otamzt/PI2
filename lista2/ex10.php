<?php
for ($i = 2; $i <= 20; $i += 2) {
    echo "$i ";
}
echo "\n";
?>

// Arquivo: fatorial.php
<?php
function fatorial($num) {
    $resultado = 1;
    while ($num > 1) {
        $resultado *= $num;
        $num--;
    }
    return $resultado;
}
echo "Fatorial de 5: " . fatorial(5) . "\n";
?>