<!DOCTYPE html>
<html lang="fr">
<?php include ("../head.php") ?>
<body>
<?php include ("../header.php") ?>
<?php

function age ($ageUtil, $majeur) {
    if ($ageUtil < $majeur) {
        echo "tu es mineur";
    } else {
        echo "tu es majeur";
    }
}
function pair ($ageUtil) {
    if ($ageUtil % 2 == 0) {
        echo "pair";
    }
    else {
        echo "impair";
    }
}
?>

<h1 class="<?php pair(16);?>">En France <?php echo age(18, 18); ?></h1>
<h1 class="<?php pair(19);?>">Aux Etats-Unis <?php  echo age(18, 21); ?></h1>

</body>
</html>
