

<?php

ini_set('display_errors', 1);
	error_reporting(E_ALL);

$query = "Drop database dane";

if (!($database = mysqli_connect("localhost", "edyta", "haslo","dane")))
	die("Nie udało się zalogować");


if (!($result = mysqli_query($database, $query))) {
	print("<p>Niepoprawne dane</p>");
	die(mysqli_error()."</body></html>");
}
mysqli_close($database);






?>


