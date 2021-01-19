<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zadatak 1</h1>
    <?php
        if(isset($_COOKIE['ime']) and isset($_COOKIE['prezime']))
        {
            $ime=$_COOKIE['ime'];
            $prezime=$_COOKIE['prezime'];
            echo "<div style='background-color: lightgray'>Ime: $ime</div>";
            echo "<div style='background-color: lightgray'>Prezime: $prezime</div>";
        }
        else
            echo "<div style='color:red'>Nema kolačića</div>";
    ?>
</body>
</html>