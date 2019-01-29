<?php

// activation du système d'autoloading de Composer
require __DIR__.'/../vendor/autoload.php';

// instanciation du chargeur de templates
$loader = new Twig_Loader_Filesystem(__DIR__.'/../templates');

// instanciation du moteur de template
$twig = new Twig_Environment($loader, [
    // activation du mode debug
    'debug' => true,
    // activation du mode de variables strictes
    'strict_variables' => true,
]);

// chargement de l'extension Twig_Extension_Debug
$twig->addExtension(new Twig_Extension_Debug());

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
    // vérifier la validité des données

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

// affichage du rendu d'un template
echo $twig->render('inscription.html.twig', [
    // transmission de données au template
    'errors' => $errors,
    'firstname' => $firstname,
    'lastname' => $lastname,
    'login' => $login,
    'email' => $email,
    'password' => $password,
]);

