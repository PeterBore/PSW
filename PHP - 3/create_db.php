

<?php

ini_set('display_errors', 1);
	error_reporting(E_ALL);


$conn = new mysqli("localhost", "edyta", "haslo");

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
} 
$query = "create database dane";

if ($conn->query($query) === TRUE) {
    echo "Baza utworzona";
} else {
    echo "Błąd przy tworzeniu bazy: " . $conn->error;
}
$conn->close();

$conn2 = new mysqli("localhost", "edyta", "haslo","dane");
if ($conn2->connect_error) {
    die("Błąd połączenia: " . $conn2->connect_error);
}
$query2="CREATE TABLE logowanie
(
   ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   login varchar(15),
   haslo varchar(15),
   imie varchar(15),
   nazwisko varchar(15),
   wiek int,
   pesel varchar(11)
   
)";

if ($conn2->query($query2) === TRUE) {
    echo "Tabela utworzona";
} else {
    echo "Błąd przy tworzeniu tabeli: " . $conn2->error;
}
$conn2->close();

$conn3 = new mysqli("localhost", "edyta", "haslo","dane");
if ($conn3->connect_error) {
    die("Błąd połączenia: " . $conn3->connect_error);
}
$query3="INSERT INTO logowanie(login, haslo, imie, nazwisko, wiek, pesel )
         VALUES ( 'ola', 'hasloola', 'Aleksandra', 'Kowalska', 22, '98092328912');";
		 
$query3 .="INSERT INTO logowanie (login, haslo, imie, nazwisko, wiek, pesel )
         VALUES ( 'ala', 'hasloala',  'Alicja', 'Nowak', 26, '04938471223')";



if ($conn3->multi_query($query3) === TRUE) {
    echo "Tabela wypełniona";
} else {
    echo "Błąd przy wypełnianiu tabeli: " . $conn3->error;
}
$conn3->close();

?>


