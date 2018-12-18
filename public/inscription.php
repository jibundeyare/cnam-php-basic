<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$firstname = '';
$lastname = '';
$login = '';
$email = '';
$password = '';

if ($_POST) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}

require __DIR__.'/../templates/inscription.php';

