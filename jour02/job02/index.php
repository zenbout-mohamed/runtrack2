<?php 

/*Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
mettant un retour à la ligne entre chaque nombre (<br />).  */

$apparentiere = [26 , 37 , 88 , 1111, 3233];

for ($i=0; $i <= 1337 ; $i++) { 
    if (!in_array($i , $apparentiere)) {
        echo $i . "<br />";
    }
}

?>