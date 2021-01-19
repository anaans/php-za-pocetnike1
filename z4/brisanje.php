<?php
    $db=mysqli_connect("localhost", "root", "", "PVA_vezba");
    mysqli_query($db, "SET NAMES utf8");
    if(isset($_POST['id']))
    {
        $id=$_POST['id'];
        if($id!="0")
        {
            $upit="DELETE FROM korisnici WHERE id={$id}";
            mysqli_query($db, $upit);
            if(mysqli_error($db)) echo "Greška<br>".mysqli_error($db);
                else echo "Uspešno obrisan zapis";
        }
        else
            echo "Niste izabrali korisnika";
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
    <h1>Zadatak 4</h1>
    <form action="brisanje.php" method="post">
        <select name="id" id="id">
            <option value="0">--Izaberite korisnika--</option>
            <?php
                $upit="SELECT * FROM korisnici";
                $rez=mysqli_query($db, $upit);
                while($red=mysqli_fetch_assoc($rez))
                    echo "<option value='{$red['id']}'>{$red['ime']} {$red['prezime']}</option>";
            ?>
        </select><br><br>
        <button>Obriši korisnika</button>
    </form>
</body>
</html>