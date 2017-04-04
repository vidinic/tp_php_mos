<?php

$login = "pauline";
$pass = "tata";


if (isset($_POST["Login"]) && isset($_POST["password"])) {
    if ($login == $_POST["Login"] && $pass == $_POST["password"]) {
        header('Location: dashboard.php?Login=ok');
    }
    else {
        header('Location: error.php?password=erreur');
    }
}
?>
