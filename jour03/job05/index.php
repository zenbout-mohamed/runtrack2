<?php
$str = "On est pas le meilleur quand on le croit mais quand on le sait.";

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
$dic = ["voyelles" => 0, "consonnes" => 0];

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]);
    if (ctype_alpha($char)) {
        if (in_array($char, $voyelles)) {
            $dic['voyelles']++;
        } else {
            $dic['consonnes']++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jou03 - Job05</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Voyelles</th>
                    <th>Consonnes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $dic['voyelles'] ?></td>
                    <td><?= $dic['consonnes'] ?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>