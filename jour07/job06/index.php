<?php
/*
Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
chaîne de caractères nommée “$str”.
Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
qu’elle doit la modifier de sorte à ce que :
● les “A” deviennent des “4”,
● les “B” des “8”,
● les “E” des “3”,
● les “G” des “6”,
● les “L” des “1”,
● les “S” des “5”
● les “T” des “7”.
Cela est valable que l’on crie ou non (majuscules et minuscules).
*/ 

function leetspeak(string $str): string{
    $map = [
        "a" => "4", "A" => "4",
        "b" => "8", "B" => "8",
        "e" => "3", "E" => "3",
        "g" => "6", "G" => "6",
        "l" => "1", "L" => "1",
        "s" => "5", "S" => "5",
        "t" => "7", "T" => "7",
    ];
    return strtr($str, $map);
}

echo leetspeak("Salut les gars");
?>