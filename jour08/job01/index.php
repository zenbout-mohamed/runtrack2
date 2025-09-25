<?php
/*
Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.
*/
session_start(); 

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    }
    $_SESSION['nbvisites']++;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 08 - Job01</title>
</head>
<body>
    <main>
        <form method ="post" action="">
            <button type ="submit" name ="reset">Reset</button>
        </form>
        <p>Nombre de visites (session) : <?= $_SESSION['nbvisites']; ?></p>
    </main>
</body>
</html>