<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job07</title>
</head>
<body>
    <main>
        <form action="index.php" method="get">
            <input type="text" name="largeur" placeholder="Valeur Largeur :">
            <input type="text" name="hauteur" placeholder="Valeur Hauteur">
            <input type="submit" value="Dessiner">
        </form>
    </main>

<?php

/*
Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci :

Si on entre les valeurs largeur = 20 et hauteur = 10 dans les champs,
la maison qui s’affiche sur la page doit ressembler à ceci :
*/
if (!empty($_GET["largeur"]) && !empty($_GET["hauteur"])) {
    $largeur = intval($_GET["largeur"]);
    $hauteur = intval($_GET["hauteur"]);

    echo "<pre>"; 

    for ($i = 0; $i < $hauteur; $i++) { 
        echo str_repeat(" ", $hauteur - $i);
        echo "/" . str_repeat(" ", $i * 2) . "\\\n";
    }
    for ($i = 0; $i < $hauteur; $i++) { 
        echo "|" . str_repeat(" ", $largeur - 2) . "|\n";
    }

    echo str_repeat("-", $largeur) . "\n";

    echo "</pre>";
}
?>
</body>
</html>
