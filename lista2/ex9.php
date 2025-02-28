<?php
function verificarLetra($letra) {
    switch (strtolower($letra)) {
        case 'a': case 'e': case 'i': case 'o': case 'u':
            echo "$letra é uma vogal.\n";
            break;
        default:
            echo "$letra é uma consoante.\n";
    }
}
verificarLetra('a');
?>