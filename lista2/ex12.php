<?php
function ehPrimo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
for ($i = 1; $i <= 50; $i++) {
    if (ehPrimo($i)) {
        echo "$i ";
    }
}
echo "\n";
?>