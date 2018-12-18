<?php

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

$fruits = [
    'choisissez un fruit',
    'banane',
    'fraise',
    'orange',
    'poire',
    'pomme',
];

foreach ($fruits as $fruit) {
    echo $fruit.'<br />';
}

?>

<ul>
<?php
foreach ($fruits as $fruit):
?>
    <li><?php echo $fruit; ?></li>
<?php
endforeach;
?>
</ul>

<?php
foreach ($fruits as $key => $fruit) {
    echo $key.': '.$fruit.'<br />';
}
?>

<select>
<?php
foreach ($fruits as $key => $fruit):
?>
    <option value="<?php echo $key; ?>"><?php echo $fruit; ?></option>
<?php
endforeach;
?>
</select>
