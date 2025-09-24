<?php
/* 
Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3. Créer 3
fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir
des effets sur le design du formulaire, la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
doit changer.
*/
$style = isset($_POST['style']) ? $_POST['style'] : "style1";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour06 - Job05</title>
    <link rel ="stylesheet" href="./css/<?php echo htmlspecialchars($style); ?>.css">
</head>
<body>
    <main>
        <form method ="post" action="">
            <label for="style">Choisissez le style de votre choix :</label>
            <select name="style" id="style">
                <option value="style1" <?php if ($style=="style1") echo "selected"; ?>> Style 1</option>
                <option value="style2" <?php if ($style=="style2") echo "selected"; ?>> Style 2</option>
                <option value="style3" <?php if ($style=="style3") echo "selected"; ?>> Style 3</option>
            </select>

            <input type="submit" value ="Appliquer">
        </form>

        <p>Le style actuel est : <b><?php echo htmlspecialchars($style); ?></b></p>
    </main>
</body>
</html>