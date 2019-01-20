<!DOCTYPE HTML>
<?php include('dzialania.php');?> 
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Lista3PHP</title>
	<link rel="stylesheet" href="style3.css" type="text/css"/>
		
</head>

<body>



	<p>
		<form method= "post" action = "selekcja.php">
			LOGIN:<br/>
			<input type="text" name="login" value="<?php echo $login; ?>"/>
			<br/><br/>
			HASŁO:<br/>
			<input type="text" name="haslo" value="<?php echo $haslo; ?>"/>
			<br/><br/>
			IMIE:<br/>
			<input type="text" name="imie" value="<?php echo $imie; ?>"/>
			<br/><br/>
			NAZWISKO:<br/>
			<input type="text" name="nazwisko" value="<?php echo $nazwisko; ?>"/>
			<br/><br/>
			WIEK:<br/>
			<input type="text" name="wiek" value="<?php echo $wiek; ?>"/>
			<br/><br/>
			PESEL:<br/>
			<input type="text" name="pesel" value="<?php echo $pesel; ?>"/>
			<br/><br/>
			
			<input type="submit" name="Zapisz" value="Zapisz"/>
		</form>
		 <p> <a href="logowanie.php">Powrót do logowania</a></p>
	</p>

</body>

</html>