<?php
    if (isset($_POST["campo1"]) && $_POST["campo1"] !== "") {
        if ($_POST["campo1"] < 5) {
            echo "Reprovado";
        } 
        else if(($_POST["campo1"] < 7)&& ($_POST["campo1"] >= 5)){
            echo "Recuperacao";
        }
        else{
            echo "Aprovado";
        }
    } else {
        echo "Por favor, insira um número.";
    }
?>