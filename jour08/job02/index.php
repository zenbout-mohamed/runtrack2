<?php
/*
Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. 
*/

if (isset($_POST['reset'])) {
    setcookie("nbvisites", 0, time() - 3600); 
    $_COOKIE['nbvisites'] = 0;
} else {
    if (!isset($_COOKIE['nbvisites'])) {
        setcookie("nbvisites", 1, time() + 3600);
        $_COOKIE['nbvisites'] = 1;
    } else {
        $count = $_COOKIE['nbvisites'] + 1;
        setcookie("nbvisites", $count, time() + 3600);
        $_COOKIE['nbvisites'] = $count;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08 - Job02</title>
</head>
<body>
    <main>
        <form method="post" action ="">
            <button type="submit" name="reset">Reset</button>
        </form>
        <p>Nombre de visites (cookie) : <?= $_COOKIE['nbvisites'] ?? 0; ?></p>
    </main>
</body>
</html>


