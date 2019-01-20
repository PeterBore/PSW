<?php 
	session_start();
	setcookie("id_sesji", session_id());	
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		
		<title>Logowanie</title>
		<meta name="description" content ="Systemy webowe/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<link rel="stylesheet" href="style3.css" type="text/css"/>
		<title>Formularz</title>
		
	</head>
	<body>

<?php ini_set('display_errors', 1);
		error_reporting(E_ALL); ?>

		<div id="logo">
				<h1>
				Logowanie</h1>
		</div>
	

		<form method= "post" action = "selekcja.php">
			Login:
			<input type="text" name="login"/>
			<br/><br/>
			Hasło:
			<input type="password" name="haslo"/>
			<br/><br/>
			
			<input type="submit" name="zaloguj" value="zaloguj"/>
		</form>
		
	</body>
</html>
