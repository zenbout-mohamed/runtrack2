<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
</head>
<body>
    <main>
        <form action="index.php" method="get">
            <input type="text" name ="nombre" placeholder="Entrez un nombre">
            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>
</html>

<?php
/*
Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”.
*/
if(isset($_GET["nombre"])){
    $nombre = $_GET["nombre"];
    if($nombre ===""){
        echo"Veuillez entrer un nombre";
    }elseif(!is_numeric($nombre)){
        echo "Ce n'est pas un nombre valide.";
    }else{
        if($nombre % 2 == 0){
            echo "Nombre pair";            
        }else{
            echo "Nombre impair";
        }
    }    
}




?>