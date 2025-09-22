<?php
/* Faire un algorithme qui affiche un rectangle de 20 de largeur par 10 de hauteur. Ces
dimensions devront être stockées dans deux variables $largeur et $hauteur, modifiables
facilement.*/

$hauteur = 10;
$largeur = 20;

for ($h=0; $h < $hauteur; $h++) { 
    for ($l=0; $l < $largeur; $l++) { 
       echo "*";
    }
    echo "<br />";
}



?>