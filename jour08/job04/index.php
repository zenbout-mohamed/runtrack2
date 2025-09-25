<?php
/*
Créez un formulaire de connexion qui contient un input de type de text nommé
“prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
nouveau afficher le formulaire de connexion.
*/

if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    setcookie("prenom", htmlspecialchars($_POST['prenom']), time() + 3600);
    $_COOKIE['prenom'] = $_POST['prenom'];
}

if (isset($_POST['deco'])) {
    setcookie("prenom", "", time() - 3600);
    unset($_COOKIE['prenom']);
}
?>

<?php if (!isset($_COOKIE['prenom'])): ?>
    <form method="post">
        <input type="text" name="prenom" placeholder="Votre prénom">
        <button type="submit" name="connexion">Connexion</button>
    </form>
<?php else: ?>
    <p>Bonjour <?= $_COOKIE['prenom']; ?> !</p>
    <form method="post">
        <button type="submit" name="deco">Déconnexion</button>
    </form>
<?php endif; ?>

