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
Développez un algorithme qui affiche le nombre d’arguments $_POST.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument POST envoyé est : “*/

if(!empty($_POST)){
    echo "Le nombre d'arugment est :" . count($_POST);
}else{
    echo "Aucun argument POST n'a été envoyé";
}

?>