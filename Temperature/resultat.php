<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include ("../head.php") ?>
<body>
<?php include ("../header.php") ?>

<?php

$temp = $_GET["temperature"];


    if ($temp < 0) {
        echo "il fait très froid".$_GET["temperature"];
    }
    elseif ($temp <= 10) {
        echo "il fait froid".$_GET["temperature"];
    }
    elseif ($temp <= 20) {
        echo "il fait normal".$_GET["temperature"];
    }
    elseif ($temp <= 30) {
        echo "il fait chaud".$_GET["temperature"];
    }
    else {
        echo "il fait très chaud".$_GET["temperature"];

}
?>

</body>
</html>
