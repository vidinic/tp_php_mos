<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include ("../head.php") ?>
<body>
<?php include ("../header.php") ?>

<?php
/*for ($i=1; $i<=10; $i++) {
    echo "<h1>$i</h1>";
}*/
$tab = array(
    array(
        "prenom" =>"Julien",
        "nom" =>"Clouet",
        "age" =>27,
    ),
    array(
        "prenom" =>"Julien",
        "nom" =>"Kabèche",
        "age" =>29,
    ),
    array(
        "prenom" =>"Julien",
        "nom" =>"Gandanger",
        "age" =>24,
    ),
    array(
        "prenom" =>"Jérémy",
        "nom" =>"Fautrat",
        "age" =>32,
    )
);

foreach ($tab as $value) {
    foreach ($value as $value1) {
        echo "<h1>$value1</h1>";
    }
}


?>

</body>
</html>













