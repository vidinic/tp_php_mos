<?php
session_start();

$_SESSION["mini"] = $_POST["mini"];
$_SESSION["maxi"] = $_POST["maxi"];
$_SESSION["vies"] = $_POST["vies"];
$_SESSION["random"] = rand($_POST['mini'], $_POST["maxi"]);

header('Location: play.php');
?>

