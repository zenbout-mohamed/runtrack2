<?php

/*
Créez un formulaire <form> qui contient :
● un champ <input> nommé “str” de type “text”,
● une liste déroulante <select> nommée “fonction”
● un bouton <button> submit.
Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option <option> choisie dans la liste déroulante.
Les choix possibles sont :
● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
(qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
chaque caractère d’un nombre égal à “$decalage”.
ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
“c”.
● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”.
*/

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07 - Job07</title>
</head>
<body>
    <main>
        <form method ="get" action="">
            <input type="text" name ="str" placeholder="Placez-y votre texte :">
            <select name="fonction">
                <option value="gras">Gras</option>
                <option value="cesar">Cesar</option>
                <option value="plateforme">Plateforme</option>
            </select>
            <button type ="submit">Envoyer</button>
        </form>
    </main>
<?php
    function gras(string $str): string {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (ctype_upper(substr($mot, 0, 1))) { 
            $mot = "<b>$mot</b>";
        }
    }
    return implode(" ", $mots);
}

function cesar(string $str, int $decalage = 2): string {
    $result = "";
    foreach (str_split($str) as $char) {
        if (ctype_alpha($char)) {
            $base = ctype_upper($char) ? ord('A') : ord('a');
            $result .= chr(($ord = (ord($char) - $base + $decalage) % 26) + $base);
        } else {
            $result .= $char;
        }
    }
    return $result;
}

function plateforme(string $str): string {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (str_ends_with($mot, "me")) { 
            $mot .= "_";
        }
    }
    return implode(" ", $mots);
}


if (!empty($_GET['str']) && !empty($_GET['fonction'])) {
    $str = $_GET['str'];
    $fonction = $_GET['fonction'];

    switch ($fonction) {
        case "gras":
            echo gras($str);
            break;
        case "cesar":
            echo cesar($str, 2);
            break;
        case "plateforme":
            echo plateforme($str);
            break;
    }
}
    
?>
</body>
</html>
