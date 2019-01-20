<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>Baza</title>
<style type="text/css">
	h2 {
			background-color: lightgrey;
			padding: 10px 10px;	
		}
	th {
			background-color: grey;
		}
	tr {
			background-color: lightgrey;
		}
	</style>
</head>
<body>

<form method="post" action="baza.php">
<h2>Wybierz wg czego mają być sortowane dane w bazie<br>
<select name="selectp">
<option>ID</option>
<option>login</option>
<option>haslo</option>
<option>imie</option>
<option>nazwisko</option>
<option>wiek</option>
<option>pesel</option>
</select>
<input type="submit" name="submit" value="sortuj">
</form>
</h2>

<?php

ini_set('display_errors', 1);
	error_reporting(E_ALL);
		
if (isset($_POST["submit"])) {
	switch($_POST["selectp"]) {
		case "ID" :
			$wybor = "ID";
			break;
		case "login" :
			$wybor = "login";
			break;
		case "haslo" :
			$wybor = "haslo";
			break;
			case "imie" :
			$wybor = "imie";
			break;
			case "nazwisko" :
			$wybor = "nazwisko";
			break;
			case "wiek" :
			$wybor = "wiek";
			break;
			case "pesel" :
			$wybor = "pesel";
			break;
	}

	$query = "SELECT * FROM logowanie ORDER BY $wybor ASC";
	
} else
	$query = "SELECT * FROM logowanie";

if (!($database = mysqli_connect("localhost", "edyta", "haslo","dane")))
	die("Nie udało się zalogować");


if (!($result = mysqli_query($database, $query))) {
	print("<p>Niepoprawne dane</p>");
	die(mysqli_error()."</body></html>");
}

mysqli_close($database);
?>

<br>
<br>
<table border=1>
	<tr>
	<th>ID</th>
	<th>login</th>
	<th>haslo</th>
	<th>imie</th>
	<th>nazwisko</th>
	<th>wiek</th>
	<th>pesel</th>
<?php

	while ($row = mysqli_fetch_row($result)) {
		print("<tr>");
		foreach ($row as $key => $value)
			print("<td align='center'>$value</td>");
		
	}
?>  
</table>
<br>

<?php
	echo quotemeta("Koniec danych.(Dane.sql)");
?>	
	
</body>
</html>
