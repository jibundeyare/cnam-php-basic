<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$errors = [];

$firstname = '';
$lastname = '';
$login = '';
$email = '';
$password = '';

if ($_POST) {
    if (empty($_POST['firstname'])) {
        $errors['firstname'] =  "Vous devez renseigner ce champ";
    } else {
        $firstname = $_POST['firstname'];
    }

    if (empty($_POST['lastname'])) {
        $errors['lastname'] =  "Vous devez renseigner ce champ";
    } else {
        $lastname = $_POST['lastname'];
    }

    if (empty($_POST['login'])) {
        $errors['login'] =  "Vous devez renseigner ce champ";
    } else {
        $login = $_POST['login'];
    }

    if (empty($_POST['email'])) {
        $errors['email'] =  "Vous devez renseigner ce champ";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['password'])) {
        $errors['password'] =  "Vous devez renseigner ce champ";
    } else {
        $password = $_POST['password'];
    }

    // s'il y a une erreur, la transmettre à l'utilisateur
    // sinon stocker les données en BDD
}

require __DIR__.'/../templates/inscription.php';

