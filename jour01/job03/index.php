<?php
/*  Créez des variables de types primitifs
(boolean, entier, chaîne de caractères, nombre à virgule flottante) et affectez-y des valeurs.
A l’aide de php, générer un tableau html qui contient dans son header trois colonnes
(type, nom, valeur) et dans son body, une ligne pour chacune des variables et de leurs informations
*/

$int = 28;
$float = 2.18;
$string = "Hello";
$booleen = true;

$variables = [
    ["type" => "integer", "nom" => "int", "valeur" => $int],
    ["type" => "float", "nom" => "float", "valeur" => $float],
    ["type" => "string", "nom" => "string", "valeur" => $string],
    ["type" => "boolean", "nom" => "booleen", "valeur" => $booleen],
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
    link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($variables as $variable): ?>
                    <tr>
                        <td><?php echo $variable['type'] ?></td>
                        <td><?php echo $variable['nom'] ?></td>
                        <td><?php
                            if ($variable['type'] === "boolean") {
                                echo $variable['valeur'] ? "true" : "false";
                            } else {
                                echo $variable['valeur'];
                            }
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>