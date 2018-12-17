<?php

// pour parier pile :
// http://localhost/cnam-basic-php/public/pile-face.php?pari=0

// pour parier face :
// http://localhost/cnam-basic-php/public/pile-face.php?pari=1

// vérifions si la clé 'pari' existe dans le tableau $_GET
// vérifions aussi si la valeur associée à la clé est différente de 0 et de 1
if (!isset($_GET['pari'])) {
    // non, elle n'existe pas
    echo 'Vous devez parier pile (0) ou face (1)<br />';
    exit();
} elseif ($_GET['pari'] != '0' && $_GET['pari'] != '1') {
    echo 'Vous devez parier pile (0) ou face (1)<br />';
    exit();
}

$tirage = random_int(0, 1);

// comparons la valeur envoyée par l'utilisateur (le pari) et la valeur tirée par le programme (le tirage)
if ($tirage == $_GET['pari']) {
    echo 'Vous avez gagné !<br />';
} else {
    echo 'Vous avez perdu !<br />';
}

