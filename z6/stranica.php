<?php
    session_start();
    if(!isset($_SESSION['id']) or !isset($_SESSION['ime']) or !isset($_SESSION['status'])){
        echo "<h1>Morate biti ulogovani da biste videli ovu stranicu</h1>";
        exit();
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
    <h1>Stranica za prijavljenog korisnika</h1>
    <p>
    <?php
        echo "Dobro došao, {$_SESSION['ime']}, prijavljeni ste kao {$_SESSION['status']}";
    ?>
    </p>
    <p>Ovde možemo videti podatke</p>
</body>
</html>
<?php
    session_unset();
    session_destroy();
    echo "Uništena sesija!!!!";
?>