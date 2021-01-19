<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zadatak 3</h1>
    <?php
        $db=mysqli_connect("localhost", "root", "", "PVA_vezba");
        mysqli_query($db, "SET NAMES utf8");
        $upit="SELECT * FROM korisnici";
        $rez=mysqli_query($db, $upit);
        while($red=mysqli_fetch_assoc($rez))
            echo "<div>{$red['id']}: {$red['ime']} {$red['prezime']} ({$red['status']} - {$red['email']})";
    ?>
</body>
</html>