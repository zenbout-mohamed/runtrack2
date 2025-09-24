<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job04</title>
</head>
<body>
    <main>
        <form method="post" action="index.php">
            <input type="text" name="prenom" placeholder="Votre prénom">
            <input type="text" name="nom" placeholder="Votre nom">
            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>
</html>

<?php

/*
Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_ POST et les valeurs associées. Il doit y avoir deux colonnes : argument et
valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
tableau :
*/

if (!empty($_POST)) {
    echo "<table><thead><tr><th>Argument</th><th>Valeur</th></tr></thead><tbody>";
    
    foreach ($_POST as $arg => $val) {
        echo "<tr><td>$arg</td><td>$val</td></tr>";
    }

    echo "</tbody></table>";
}

?>