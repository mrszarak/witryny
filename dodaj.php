<?php
// polaczene
$servername = "fdb1030.awardspace.net";
$username = "3720513_hotel";
$password = "zaq1@WSX"; 
$dbname = "3720513_hotel";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // czy polacznie sie udao
}
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$data_przyjazdu = $_POST['data_przyjazdu'];
$data_wyjazdu = $_POST['data_wyjazdu'];
$nr_pokoju = $_POST['nr_pokoju'];
// zapytanie
$sql = "INSERT INTO goscie (imie, nazwisko, data_przyjazdu, data_wyjazdu, nr_pokoju) VALUES ('$imie', '$nazwisko', '$data_przyjazdu', '$data_wyjazdu', '$nr_pokoju')";
if ($conn->query($sql) === TRUE) {
    echo "Dodane";
    // powrot
    echo "<br><br>";
    echo "<a href='formularz_dodaj.php'>Dodaj kolejnego gościa</a>";
} else {
    echo "Błąd podczas dodawania gościa: " . $conn->error;
    echo "<br><br>";
    echo "<a href='formularz_dodaj.php'>Dodaj kolejnego gościa</a>";
}
// zamykanie
$conn->close();
?>
