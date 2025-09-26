
<?php 
/*
En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez récupérer le nom des salles et le nom de leur étage. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
doit contenir le nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données.
*/

$mysqli = new mysqli("localhost", "root", "", "jour09");

if ($mysqli->connect_errno) {
    die("Échec de la connexion MySQL: " . $mysqli->connect_error);
}


$sql = "SELECT salles.nom AS salle, etage.nom AS etage 
        FROM salles 
        INNER JOIN etage ON salles.id_etage = etage.id";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur dans la requête: " . $mysqli->error);
}

echo "<table border='1' cellspacing='0' cellpadding='5'>";
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
