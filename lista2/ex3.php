<?php
    if (isset($_POST["campo1"]) && $_POST["campo1"] !== "") {
        if (($_POST["campo1"] % 2) == 0 ) {
            echo "É um número par";
        } else {
            echo "É um número impar";
        }
    } else {
        echo "Por favor, insira um número.";
    }
?>