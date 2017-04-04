<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include ("../head.php") ?>
<body>
<?php include ("../header.php") ?>
<?php

$langue = $_GET["langue"];

if (isset($_GET["langue"])) {
    if ($_GET["langue"] == "fr") {
        echo "<h1>Bonjour</h1>";
    }
    elseif ($_GET["langue"] == "en") {
        echo "<h1>Hello</h1>";
    }
    else {
        echo "<h1>inconnu</h1>";
    }
}
?>
</body>
</html>
