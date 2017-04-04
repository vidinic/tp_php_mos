<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include ("../head.php") ?>
<body>
    <?php include ("../header.php") ?>
<?php

$nom ="Mancheopenschool";

for ($i=0; $i<strlen($nom); $i++) {

        if ($i%2 == 0) {
            echo "<h1 class='text-danger'>$nom[$i]</h1>";
        }
        else {
            echo "<h1 class=''>$nom[$i]</h1>";
        }
}
?>
</body>
</html>
