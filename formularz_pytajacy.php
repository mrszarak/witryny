<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyszukiwanie</title>
</head>
<body>

    Wyszukiwanie
    <br>
    <br>
    <form action="wyszukaj.php" method="post">
        <label for="imie">Imię:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" id="imie" name="imie" required>
        <br>
        <br>
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" id="nazwisko" name="nazwisko" required>
        <br>
        <br>
        <button type="submit">Wyszukaj</button>
    </form>

</body>
</html>