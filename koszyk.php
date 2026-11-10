<?php
session_start();
if (!isset($_SESSION["koszyk"])) {
    $_SESSION["koszyk"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="koszyk.php?id=chleb">Chleb</a><br>
    <a href="koszyk.php?id=ser">Ser</a><br>
    <a href="koszyk.php?id=mleko">Mleko Ksawerego</a><hr>
    
    <?php
        if (isset($_GET["id"])) {
            $produkt = $_GET["id"];
            $_SESSION["koszyk"] .= $produkt." ";
            echo $_SESSION["koszyk"];
        }
    ?>
</body>
</html>
