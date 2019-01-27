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

$code = '';
$name = '';
$price = '';
$category = '';
$photo = '';

if ($_POST) {
    // vérifier la validité des données

    if (empty($_POST['code'])) {
        $errors['code'] =  "Vous devez renseigner ce champ";
    } else {
        $code = $_POST['code'];
    }

    if (empty($_POST['name'])) {
        $errors['name'] =  "Vous devez renseigner ce champ";
    } else {
        $name = $_POST['name'];
    }

    if (empty($_POST['price'])) {
        $errors['price'] =  "Vous devez renseigner ce champ";
    } else {
        $price = $_POST['price'];
    }

    if (empty($_POST['category'])) {
        $errors['category'] =  "Vous devez renseigner ce champ";
    } else {
        $category = $_POST['category'];
    }

    // @todo gérer la photo

    // s'il y a une erreur, la transmettre à l'utilisateur
    // sinon stocker les données en BDD
}

require __DIR__.'/../templates/new-tool.php';

