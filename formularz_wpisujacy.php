<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dopisz Gościa</title>
</head>
<body>
    <h1>Dopisz Gościa</h1>
    <form action="dodaj.php" method="post">
        <label for="imie">Imię:</label>
        <input type="text" id="imie" name="imie" required>
        <br>
        <br>
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" id="nazwisko" name="nazwisko" required>
        <br>
        <br>
        <label for="data_przyjazdu">Data Przyjazdu:</label>
        <input type="date" id="data_przyjazdu" name="data_przyjazdu" required>
        <br>
        <br>
        <label for="data_wyjazdu">Data Wyjazdu:</label>
        <input type="date" id="data_wyjazdu" name="data_wyjazdu" required>
        <br>
        <br>
        <label for="nr_pokoju">Numer Pokoju:</label>
       <input type="number" id="nr_pokoju" name="nr_pokoju" max=100 required>
        <br>
        <br>
        <button type="submit">DOPISZ</button>
    </form>

</body>
</html>