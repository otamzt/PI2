<?php
    if ((isset($_POST["campo1"]) && $_POST["campo1"] !== "") && (isset($_POST["campo2"]) && $_POST["campo2"] !== "") ) {
        if ($_POST["campo1"] > $_POST["campo2"]) {
            echo "O primeiro valor á maior";
        } 
        else if($_POST["campo2"] > $_POST["campo1"]){
            echo "O segundo valor é maior";
        }
        else{
            echo "os dois valores sao iguais";
        }
    } 
    else {
        echo "Por favor, insira um número.";
    }


?>