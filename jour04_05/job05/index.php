<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
</head>
<body>
    <main>
        <form method="post" action="index.php">
            <input type="text" name="username" placeholder="Nom d'utilisateur">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" value="Connexion">
        </form>
    </main>
</body>
</html>

<?php
/*
Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”.
*/ 

if (!empty($_POST)) {
   if($_POST['username']=== "John" && $_POST['password']=== "Rambo"){
    echo "C'est pas ma guerre";
   }else{
    echo "Votre pire cauchemar";
   }
}

?>