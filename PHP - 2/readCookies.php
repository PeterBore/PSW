<?php
$kluczOdczyt=$_GET['nazwaCisteczka'];
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Lista nr 2 - PHP</title>

</head>

<body>

	<h3>Zapisane pliki cookie poszczególnych użytkowaników: </h3>
      <?php
         foreach ($_COOKIE as $key => $value )
         print( "<p>$key: $value</p>" );
      ?>
	  
	  <form action="readCookies.php" method="GET">
		Nazwa cisteczka: <input type=text name="nazwaCisteczka"/><br/>
		<input type=submit value="Pokaż ciasteczko"/>
		<?php
			foreach ($_COOKIE as $key => $value )
         if($key==$kluczOdczyt){
			 print( "<p>$key: $value</p>" );
		 }
		?>
  </form>
</body>
</html>