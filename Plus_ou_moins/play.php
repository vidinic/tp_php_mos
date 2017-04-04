<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include ("../head.php") ?>
<body>
<?php include ("../header.php") ?>
<?php
session_start();
?>

<h1>Plus ou moins</h1>

<h1><?php echo "chiffre mini : ".$_SESSION["mini"]?></h1>
<h1><?php echo "chiffre maxi : ".$_SESSION["maxi"]?></h1>
<h1><?php echo "nombre de vies : ".$_SESSION["vies"]?></h1>
<h1> c'est plus <?php echo $_GET['resultat']?></h1>
<form action="check.php" method="post">
    <h1>Entrez votre chiffre <input name="chiffreUtil" type="number"></h1>
    <h1><input type="submit" value="play" /></h1>
</form>

</body>
</html>

