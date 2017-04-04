<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include ("../head.php") ?>
<body>
<?php include ("../header.php") ?>
    <form action="index.php" method="post">
        <h1> Entrez vos noms : <input name="Loterie" type="text" /></h1>
        <h1><input type="submit" value="envoyer" /></h1>
    </form>


<?php
    if (isset($_POST["Loterie"])) {
        $loto = $_POST ["Loterie"];
        $participants = explode(" ", $loto);
        $random = array_rand($participants);
        echo $participants[$random];
    }
?>
</body>
</html>

