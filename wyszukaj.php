<?php
$servername = "fdb1030.awardspace.net";
$username = "3720513_hotel";
$password = "zaq1@WSX"; 
$dbname = "3720513_hotel";
$conn = new mysqli($servername, $username, $password, $dbname); //laczenie
if ($conn->connect_error) { // czy polaczenie dziala
    die("Connection failed: " . $conn->connect_error);
}
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$sql = "SELECT * FROM goscie WHERE imie = '$imie' AND nazwisko = '$nazwisko'";
$result = $conn->query($sql);

// wyswietlenie
if ($result) {
    if ($result->num_rows > 0) {
        echo "<h2>Informacje o Gościu:</h2>";
        echo "<table border='1'><tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>Data Przyjazdu</th><th>Data Wyjazdu</th><th>Numerr Pokoju</th></tr>";
        // wyniki
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["imie"]."</td><td>".$row["nazwisko"]."</td><td>".$row["data_przyjazdu"]."</td><td>".$row["data_wyjazdu"]."</td><td>".$row["nr_pokoju"]."</td></tr>";
        }
        //powrot
        echo "</table>";
        echo "<br><br>";
        echo "<a href='index.php'>Powrót</a>";
    } else {
        echo "Brak danych";
        echo "<br><br>";
        echo "<a href='index.php'>Powrót";
    }
} else {
    echo "Błąd zapytania: " . $conn->error;
}
$conn->close(); //zamykanie
?>
