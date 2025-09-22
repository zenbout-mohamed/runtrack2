<?php
/*Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
Ex. : IoyaeIaaiIaoa*/ 

$str ="I'm sorry Dave I,'m afraid I can't do that";
$voyelles = ['a','e','i','o','u','y','A','E','I','O','U','Y'];
$charArray = str_split($str);

foreach($charArray as $char){
    if(in_array($char, $voyelles)){
        echo $char;
    }
}


?>