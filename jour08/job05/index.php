<?php
/*
Développez le fameux jeu du morpion. Faites un tableau html avec 3 lignes et 3
colonnes représentant la grille. Au début de la partie, chacune des cases contient un
bouton de type submit dont la valeur est “-”. Si un joueur clique sur ce bouton, le bouton
est remplacé par un “O” ou par un “X”. C’est le joueur “X” qui commence.
Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et réinitialisez la partie. Si
toutes les cases ont été cliquées et que personne n’a gagné, affichez “Match nul” et

réinitialisez la partie. Un bouton “réinitialiser la partie” présent en dessous de la grille
permet également de réinitialiser la partie à tout moment.
*/

session_start();

// Initialisation de la grille
if (!isset($_SESSION['grid']) || isset($_POST['reset'])) {
    $_SESSION['grid'] = array_fill(0, 9, "-"); 
    $_SESSION['turn'] = "X";
}

// Si clic sur une case
if (isset($_POST['case'])) {
    $index = (int)$_POST['case'];
    if ($_SESSION['grid'][$index] === "-") {
        $_SESSION['grid'][$index] = $_SESSION['turn'];
        $_SESSION['turn'] = ($_SESSION['turn'] === "X") ? "O" : "X";
    }
}

// Fonction de vérification de victoire
function checkWinner($grid)
{
    $wins = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8], // lignes
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8], // colonnes
        [0, 4, 8],
        [2, 4, 6]  // diagonales
    ];
    foreach ($wins as $combo) {
        if (
            $grid[$combo[0]] !== "-" &&
            $grid[$combo[0]] === $grid[$combo[1]] &&
            $grid[$combo[1]] === $grid[$combo[2]]
        ) {
            return $grid[$combo[0]];
        }
    }
    if (!in_array("-", $grid)) {
        return "NUL";
    }
    return null;
}

$winner = checkWinner($_SESSION['grid']);
if ($winner) {
    echo $winner === "NUL" ? "<p>Match nul</p>" : "<p>$winner a gagné</p>";
    $_SESSION['grid'] = array_fill(0, 9, "-");
    $_SESSION['turn'] = "X";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08 - Job05</title>
</head>

<body>
    <main>
        <form method="post">
            <table border="1">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <tr>
                        <?php for ($j = 0; $j < 3; $j++):
                            $index = $i * 3 + $j; ?>
                            <td>
                                <?php if ($_SESSION['grid'][$index] === "-"): ?>
                                    <button type="submit" name="case" value="<?= $index ?>">-</button>
                                <?php else: ?>
                                    <?= $_SESSION['grid'][$index] ?>
                                <?php endif; ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </table>
            <button type="submit" name="reset">Réinitialiser la partie</button>
        </form>
    </main>
</body>
</html>