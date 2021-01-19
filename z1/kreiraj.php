<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>zadatak 1</h1>
    <form action="kreiraj.php" method="post">
        <input type="text" name="ime" placeholder="Unesite ime"><br><br>
        <input type="text" name="prezime" placeholder="Unesite prezime"><br><br>
        <button>Napravi kolačiće</button>
    </form>
    <hr>
    <?php
        if(isset($_POST['ime']))
        {
            $ime=$_POST['ime'];
            $prezime=$_POST['prezime'];
            if($ime!="" or $prezime!="")
            {
                setcookie("ime", $ime, time()+3600, "/");
                setcookie("prezime", $prezime, time()+3600, "/");
                echo "Kolačići kreirani";
            }
            else
            {
                setcookie("ime", "", time()-1, "/");
                setcookie("prezime", "", time()-1, "/");
                echo "Kolačići uništeni";
            }
        }
        else
            echo "Dobro došli";
    ?>
</body>
</html>