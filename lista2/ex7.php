<?php
    $numero = $_POST["campo1"];
    $i = 1;

    echo "Tabuada do $numero:<br>";

    do {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
        $i++;
    } while($i <= 10);
?>
