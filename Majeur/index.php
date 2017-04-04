<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include ("../head.php") ?>
<body>
<?php include ("../header.php") ?>

<form action="verif.php" method="get">
    <select class="" name="annee">
        <?php
        for ($i=1900; $i<=2017; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    <select class="" name="age">
        <?php
        for ($i=0; $i<=100; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    <h1><input type="submit" value="envoyer"></h1>

    <?php
    if (isset($_GET["resulat"])) {
       echo $_GET["resulat"] ;
    }


    ?>

</form>
</body>
</html>
