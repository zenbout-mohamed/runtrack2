<?php
/*
Créez une fonction nommée “bonjour($jour)”.
Cette fonction prend en paramètre un booléen nommé “$jour”.
● Si le paramètre “$jour” vaut true, la fonction doit afficher : “Bonjour”,
● Si le paramètre “$jour” vaut false, la fonction doit afficher : “Bonsoir”.
*/

function bonjour(bool $jour){
    if ($jour == true) {
        echo "Bonjour";
    }else{
        echo "Bonsoir";
    }
}

bonjour(true);
bonjour(false);
?>