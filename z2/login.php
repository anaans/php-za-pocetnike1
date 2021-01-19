<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zadatak 2</h1>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Unesite email"><br><br>
        <input type="password" name="lozinka" placeholder="Unesite lozinku"><br><br>
        <button>Prijava</button>
    </form>
    <hr>
    <?php
        if(isset($_POST['email']))
        {
            $email=$_POST['email'];
            $lozinka=$_POST['lozinka'];
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['lozinka']=$lozinka;
            header("Location: stranica.php");
        }
        else
            echo "Dobro došli";
    ?>
</body>
</html>