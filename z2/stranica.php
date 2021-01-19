<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Zadatak 2</h1>
<?php
    if(isset($_SESSION['email']) and isset($_SESSION['lozinka']))
    {
        $email=$_SESSION['email'];
        $lozinka=$_SESSION['lozinka'];
        echo "<div>Email: $email</div>";
        echo "<div>Lozinka: $lozinka</div>";
        session_unset();
        session_destroy();
    }
    else
        echo "<div style='color:red'>Nema sesije</div>";
?>

</body>
</html>