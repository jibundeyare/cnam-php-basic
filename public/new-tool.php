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
    $code = $_POST['code'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    // gérer la photo

    // vérifier la validité des données
    if (empty($code)) {
        $errors['code'] =  "Vous devez renseigner ce champ";
    }

    if (empty($name)) {
        $errors['name'] =  "Vous devez renseigner ce champ";
    }

    if (empty($price)) {
        $errors['price'] =  "Vous devez renseigner ce champ";
    }

    if (empty($category)) {
        $errors['category'] =  "Vous devez renseigner ce champ";
    }

    // s'il y a une erreur, la transmettre à l'utilisateur
    // sinon stocker les données en BDD
}

require __DIR__.'/../templates/new-tool.php';

