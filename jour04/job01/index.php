<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>
<body>
    <main>
        <form method="get" action="index.php">
            <input type="text" name="prenom" placeholder="Prénom : ">
            <input type="text" name="nom" placeholder="Nom : ">
            <input type="submit" valeu="Envoyer">
        </form>
    </main>
</body>
</html>
<?php
/* Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument GET envoyé est : “



*/

if (!empty($_GET)) {
    echo "Le nombre d'argument GET envoyé est :" . count($_GET);
} else {
    echo "Aucun argument GET n'a été envoyé";
}
?>