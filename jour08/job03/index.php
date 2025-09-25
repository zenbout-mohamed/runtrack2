<?php
/*
Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.
*/

session_start();

if (isset($_POST['reset'])) {
    unset($_SESSION['prenoms']);
} elseif (!empty($_POST['prenom'])) {
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08 - Job03</title>
</head>

<body>
    <main>
        <form method="post">
            <input type="text" name="prenom" placeholder="Votre prénom">
            <button type="submit">Ajouter</button>
            <button type="submit" name="reset">Reset</button>
        </form>
        <ul>
            <?php
            if (!empty($_SESSION['prenoms'])) {
                foreach ($_SESSION['prenoms'] as $p) {
                    echo "<li>$p</li>";
                }
            }
            ?>
        </ul>
    </main>
</body>
</html>