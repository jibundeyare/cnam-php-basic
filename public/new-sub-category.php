<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$categories = [
    'choisissez la catégorie',
    'outil',
    'matériel',
];

$errors = [];

$category = '';
$name = '';
$description = '';

if ($_POST) {
    // vérifier la validité des données

    if (empty($_POST['category'])) {
        $errors['category'] =  "Vous devez renseigner ce champ";
    } else {
        $category = $_POST['category'];
    }

    if (empty($_POST['name'])) {
        $errors['name'] =  "Vous devez renseigner ce champ";
    } else {
        $name = $_POST['name'];
    }

    if (!empty($_POST['description'])) {
        $description = $_POST['description'];
    }

    // s'il y a une erreur, la transmettre à l'utilisateur
    // sinon stocker les données en BDD
}

require __DIR__.'/../templates/new-sub-category.php';

