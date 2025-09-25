<?php
/*
Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération.
*/

function calcule(float $a, string $operation, float $b){
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return ($b != 0) ? $a / $b :"Division par zero interdite";
        case '%':
            return $a % $b;
        default:
            return "Opération invalide";
    }
}

echo calcule(10, '/' , 0);
?>