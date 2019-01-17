<?php
$cookie_name = "user";
$cookie_haslo = "John Doe";
setcookie($cookie_name, $cookie_haslo, time() + (86400 * 30), "/");
$haslo =$_POST['haslo'];
$login =$_POST['login'];
$_SESSION["login"] = $login;
$_SESSION["haslo"] = $haslo;
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Lista nr 2 - PHP</title>
</head>

<body>
	
	<p>
		<h1>Zmiana wyglądu strony z użyciem ciasteczek</h1>
		<form action="cookies.php" method="post">
			Imie:
			<input type="text" name="imie"/>
			<br/><br/>
			Kolor tła:
			<input type="text" name="tlo"/>
			<br/><br/>
			Rodzaj czcionki:
			<input type="text" name="czcionkaRodzaj"/>
			<br/><br/>
			Kolor czcionki:
			<input type="text" name="czcionkaKolor"/>
			<br/><br/>
			<input type="submit" value="Zapisz ustawienia"/>
		</form>
	</p>
	<p>
		<h1>Logowanie</h1>
		<form action="zalogowany.php" method="post">
			Login:
			<input type="text" name="login"/>
			<br/><br/>
			Hasło:
			<input type="text" name="haslo"/>
			<br/><br/>
			<input type="submit" value="Zaloguj"/>
		</form>
		
	</p>

</body>
</html>