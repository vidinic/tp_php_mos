<?php

$limite = $_GET["age"];
$age = 2017 - $_GET['annee'];
echo $limite;

if ($age < $limite) {

    header('Location: index.php?resultat=mineur');
}
else {
    header('Location: index.php?resulat=majeur');
}

?>

