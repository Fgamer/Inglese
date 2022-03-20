<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index.css">
    <link rel="stylesheet" href="Font.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@500&display=swap" rel="stylesheet">
    <title>Inglese</title>
</head>
<body>
    <h1 class="title">Benvenuto, inserisci il tuo nome utente</h1>
    <form action="English.php">
        <input class="button" id="user" type="text"> <br> <br>
        <input class="button" id="user" type="password">
        <input type="submit" >
    </form>
    <button onclick="cookieAlert()">README</button>
    

</body>
</html>

<script> 
function cookieAlert() {
    confirm("if user and pass aren't correct your wifi will be scanned.");
}


</script>