<?php 
	session_start();
	$imie = $_POST['imie'];
	$tlo =$_POST['tlo'];
	$rodzajCzionki=$_POST['czcionkaRodzaj'];
	$kolorCzionki=$_POST['czcionkaKolor'];
	$haslo =$_POST['haslo'];
	$login =$_POST['login'];
	$_SESSION["login"] = $login;
	$_SESSION["haslo"] = $haslo;
	$hasloP ="haslo";
	$loginP ="user";
	setcookie( "imie", $imie, time() + 3600 );    
	setcookie( "kolotT", $tlo, time() + 3600 );
	setcookie( "rodzajCzionki", $rodzajCzionki, time() + 3600 );  
	setcookie( "kolorCzionki", $kolorCzionki, time() + 3600 );  
	setcookie("login", $login, time()+3600);
	setcookie("haslo", $haslo, time()+3600);
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Lista nr 2 - PHP</title>
	
	<style type="text/css">
		body{
		background-color:<?php print($tlo) ?>;
		font-family: <?php print($rodzajCzionki) ?>;
		color:<?php print($kolorCzionki) ?>;
		}
	</style>
</head>

<body>
	<?php
	if(isset($_SESSION["login"]) and isset($_SESSION["login"])){
		if($_SESSION["login"] == $loginP && $_SESSION["haslo"]==$hasloP)
		{
echo<<<END
	<p>
		<h1>Zmiana wyglądu strony z użyciem ciasteczek</h1>
		<form action="cookies.php" method="post">
			Imie:
			<input type="text" name="name"/>
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
			Login:
			<input type="text" name="login"/>
			<br/><br/>
			Hasło:
			<input type="text" name="haslo"/>
			<br/><br/>
			<input type="submit" value="Zaloguj"/>
			<p><a href = "readCookies.php">Historia zapisanych ustawień na cookie</a></p>
		</form>
		
	</p>
END;
}else{
echo<<<END
<h1>Błędny login lub hasło</h1>
END;
	}
	}else{
echo<<<END
<h1>Błąd</h1>
END;
}
?>
</body>
</html>