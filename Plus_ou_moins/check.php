<?php
session_start();

$chiffreUtil = $_POST['chiffreUtil'];

if ($chiffreUtil < $_SESSION["random"]) {
    $_SESSION["vies"]--;
    header('Location: play.php?resultat=grand');
}
elseif ($chiffreUtil > $_SESSION["random"]) {
    $_SESSION["vies"]--;
    header('Location: play.php?resultat=petit');

}
else {
    echo "bravo";
}

?>

