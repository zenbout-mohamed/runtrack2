<?php
/* En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez l’ensemble des informations de la table etudiants. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
(thead) doit contenir le nom des champs. Les suivantes (tbody) doivent contenir les
données présentes dans votre base de données.*/
$mysqli = new mysqli("localhost", "root", "", "jour09");

if ($mysqli->connect_errno) {
    die("Échec de la connexion MySQL: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM etudiants";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur dans la requête: " . $mysqli->error);
}
echo "<table>";
echo "<thead><tr>";


$fields = $result->fetch_fields();
foreach ($fields as $field) {
    echo "<th>{$field->name}</th>";
}
echo "</tr></thead><tbody>";


while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>{$value}</td>";
    }
    echo "</tr>";
}

echo "</tbody></table>";


$result->free();
$mysqli->close();
?>
