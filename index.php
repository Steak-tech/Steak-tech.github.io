<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex"> 
    <title>Saint Valentin</title>
    <link rel="icon" href="img/Coeur.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    if (isset($_GET["oui"])) {
        $oui = $_GET["oui"];
    }
    if (isset($_GET["non"])) {
        $non = $_GET["non"];
    }

    if (isset($non)) {
        $positionh = rand(0,500);
        $positionl = rand(0,1080);
    } 
    ?>
    <h1>Veux-tu être ma Valentine ?</h1>
    <?php 
        if (isset($non)) {
            $i = rand(0,7);
        }
        if (isset($i) and $i ==0) {
            echo "Tu n'arrivera jamais à cliquer sur non";
        }
        if (isset($i) and $i == 1) {
            echo "Pas loin en vrai et tout mais c'est pas ça j'crois";
        }
        if (isset($i) and $i == 2) {
            echo "Tu y étais presque...";
        }
        if (isset($i) and $i == 3) {
            echo "Zut, je crois que tu t'es trompée de boutton";
        }
        if (isset($i) and $i == 4) {
            echo "En vrai le boutton vert est bien aussi et tout";
        }
        if (isset($i) and $i == 5) {
            echo "Aller encore une chance";
        }
        if (isset($i) and $i == 6) {
            echo "Hélas, ce n'est pas la bonne réponse chat";
        }
        if (isset($i) and $i == 7) {
            echo "Hmmm je pense que tu devrais essayer autre chose";
        }

    ?>
    <form action="yess.php" >
    <input type="submit" name="Oui" value="Oui" id="oui">
    </form>
    <form method="get">
        <?php
        if (isset($non)) {
        echo '<input type="submit" name="non" value="non" id="non" style="right:' . $positionl . 'px; bottom:' . $positionh . 'px; position : absolute;">';
        }
        else {
        echo '<input type="submit" name="non" value="non" id="non">';  
        }
        if (isset($oui)) {

        }
        ?>
    </form>

</body>
</html>