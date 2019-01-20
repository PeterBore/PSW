<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		
		<title>Formularz</title>
		<meta name="description" content ="Systemy webowe - lista nr"/>
		<meta name="keywords" content="list nr1, systemy webowe"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<link rel="stylesheet" href="style1.css" type="text/css"/>
		<title>Formularz</title>
		
	</head>
	<body>

<?php ini_set('display_errors', 1);
		error_reporting(E_ALL); ?>

		<div id="logo">
				<h1><img src = "img/kino.jpg" alt="Logo" width="150" height="80"/>
				Formularz</h1>
		</div>
	

		<form method= "post" action = "podsumowanie.php">
			<div>
		
				<label>Imię:</label>
				<input type="text" name="imie" required>
			</div>

			<div>
				<label>Nazwisko:</label>
				<input type= "text" name= "nazwisko" required>
			</div>

			<div>
				<label>Telefon:</label>
				<input type="text" name="telefon" placeholder = "+48-xxx-xxxxxx" />
			</div>

			<p>
				Wybierz uczelnie
			</p>

			<select name = "uczelnia">
				<option>Politechnika Wrocławska</option>
				<option>Uniwersytet Przyrodniczy</option>
				<option>Uniwersytet Jagielloński</option>
			</select>

			<p>
				Zaznacz swoją płeć
			</p>

			<p>

				<input type="radio" name="plec" value="kobieta" checked> kobieta
				<input type="radio" name="plec" value="mężczyzna"> mężczyzna
			</p>



			<p>
				Wybierz obszar zainteresowań
			</p>



			<p>
				<input type="checkbox" name="temat[]" value="sport" checked />
				sport
				<br>
				<input type="checkbox" name="temat[]" value="turystyka" />
				turystyka
				<br>
				<input type="checkbox" name="temat[]" value="literatura" />
				literatura
				<br>
				<input type="checkbox" name="temat[]" value="muzyka" />
				muzyka
				<br>
				<input type="checkbox" name="temat[]" value="film" />
				film
			</p>

			<div>
				<label>Wiek:</label>
				<input type="number" name= "wiek" value="20">
			</div>
			
			<p>
			
			
			umiejętność jazdy samochodem [od 0 do 5]
			</p>

			<p>

				<input type="radio" name="um1" value="0" checked> 0
				<input type="radio" name="um1" value="1"> 1
				<input type="radio" name="um1" value="2"> 2
				<input type="radio" name="um1" value="3"> 3
				<input type="radio" name="um1" value="4"> 4
				<input type="radio" name="um1" value="5"> 5
			</p>
			
			znajomość angielskiego [od 0 do 5]
			</p>

			<p>

				<input type="radio" name="um2" value="0" checked> 0
				<input type="radio" name="um2" value="1"> 1
				<input type="radio" name="um2" value="2"> 2
				<input type="radio" name="um2" value="3"> 3
				<input type="radio" name="um2" value="4"> 4
				<input type="radio" name="um2" value="5"> 5
			</p>
			
			
				Jakie dodatkowe informacje chcesz wyświetlić
			</p>

			<select name = "sglobalne">
				<option>serwer</option>
				<option>post</option>
			</select>
			
			<p>
				<input type ="submit" name ="submit" value="Wyślij">
				<input type="reset" name ="reset" value="Skasuj">
			</p>
			
			<p>
				</br>
			</p>
		</form>
		
	</body>
</html>
