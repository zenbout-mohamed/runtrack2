<?php

/*Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c */

$str = "Certaiens choses changent, et d'autres ne changeront jamais.";
$newStr = "";

for($i=0; $i <strlen($str); $i++){
    if($i == strlen($str) - 1){
        $newStr .= $str[0];
    
    }else{
        $newStr .= $str[$i + 1];
    }
}

echo $newStr;
?>