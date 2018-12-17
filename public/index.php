<?php
// public/index.php
echo "Hello world!<br>";

// $cb est une variable de type booléen
$cb = true;
$liquide = false;

if ($cb || $liquide) {
    echo "Je peux faire le courses<br>";
} else {
    echo "Je ne peux pas faire les courses<br>";
}

if (isset($_GET['email'])) {
    echo $_GET['email'];
}

