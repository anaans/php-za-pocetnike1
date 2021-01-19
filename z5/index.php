<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="index.js"></script>
</head>
<body>
    <h1>Zadatak 5</h1>
    <form action="index.php" method="post">
        <input type="text" name="email" id="email" placeholder="Unesite email"/><br><br>
        <input type="text" name="lozinka" id="lozinka" placeholder="Unesite lozinku"/><br><br>
        <input type="checkbox" name="potvrda" id="potvrda" value="1"> Da li se slažete? <br><br>
        <button type="button" onclick="provera();">Prijavite se</button>
    </form>
    <hr>
    <div id="odgovor"></div>
</body>
</html>