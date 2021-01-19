<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script	  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
    <script src="login.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Zadatak 6</h1>
    <form action="login.php" method="post">
        <input type="text" name="email" id="email" placeholder="Unesite email"/><br><br>
        <input type="text" name="lozinka" id="lozinka" placeholder="Unesite lozinku"/><br><br>
        <button type="button" onclick="provera();">Prijavite se</button>
    </form>
    <hr>
    <div id="odgovor"></div>
</body>
</html>