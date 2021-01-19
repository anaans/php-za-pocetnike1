<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zadatak 3</h1>
    <form action="dodaj.php" method="post">
        <input type="text" name="ime" placeholder="Unesite ime" required><br><br>
        <input type="text" name="prezime" placeholder="Unesite prezime" required><br><br>
        <input type="text" name="status" placeholder="Unesite status" required><br><br>
        <input type="text" name="email" placeholder="Unesite email" required><br><br>
        <input type="text" name="lozinka" placeholder="Unesite lozinku" required><br><br>
        <button name="btnSnimi">Snimi podatke</button>
    </form>
    <hr>
    <?php
        if(isset($_POST['ime']))
        {
            $ime=$_POST['ime'];
            $prezime=$_POST['prezime'];
            $status=$_POST['status'];
            $email=$_POST['email'];
            $lozinka=$_POST['lozinka'];
            if($ime!="" and $prezime!="" and $status!="" and $email!="" and $lozinka!="" )
            {
                $db=mysqli_connect("localhost", "root", "", "PVA_vezba");
                mysqli_query($db, "SET NAMES utf8");
                $upit="INSERT INTO korisnici (ime, prezime, status, email, lozinka) VALUES ('{$ime}', '{$prezime}', '{$status}', '{$email}', '{$lozinka}' )";
                mysqli_query($db, $upit);
                if(mysqli_error($db)) echo "Greška<br>".mysqli_error($db);
                else echo "Uspešno dodat zapis";
            }
            else echo "Svi podaci su obavezni";
        }
        else
            echo "Dobro došli";  
    ?>
</body>
</html>