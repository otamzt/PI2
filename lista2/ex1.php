<?php
    if (isset($_POST["campo1"]) && $_POST["campo1"] !== "") {
        if ($_POST["campo1"] > 0) {
            echo "É um número positivo";
        } else {
            echo "É um número negativo";
        }
    } else {
        echo "Por favor, insira um número.";
    }
?>