<?php
    session_start();
 $login = isset($_POST[ "login" ]) ? $_POST[ "login" ] : "";
 $haslo = isset($_POST[ "haslo" ]) ? $_POST[ "haslo" ] : "";	 
 $imie = isset($_POST[ "imie" ]) ? $_POST[ "imie" ] : "";	
 $nazwisko = isset($_POST[ "nazwisko" ]) ? $_POST[ "nazwisko" ] : "";
 $wiek = isset($_POST[ "wiek" ]) ? $_POST[ "wiek" ] : ""; 
 $pesel = isset($_POST[ "pesel" ]) ? $_POST[ "pesel" ] : "";
	
	
	if(isset($_POST["zaloguj"])){
		
		
	if (!preg_match('/^[a-ząęółśżźćń]+$/', $_POST["login"])) {
		print("<p class = 'error'>Zły format. Login powinien składać się z małych liter.</p>
               <p>Kliknij wstecz i odśwież, aby powrócić do logowania.</p>
               </body></html>");
		die();
	}
	if (!preg_match('/^[a-ząęółśżźćń]+$/', $_POST["haslo"])) {
		print("<p class = 'error'>Zły format. Hasło powinno składać się z małych liter.</p>
               <p>Kliknij wstecz i odśwież, aby powrócić do logowania.</p>
               </body></html>");
		die();
	}		
	
	$_SESSION["login"] = $_POST["login"];
	$_SESSION["haslo"] = $_POST["haslo"];
	;	
		
	$query = "SELECT * FROM logowanie" ;
	if (!($database = mysqli_connect("localhost", "edyta", "haslo","dane")))
	die("Nie udało się zalogować");


	if (!($result = mysqli_query($database, $query))) {
	print("<p>Niepoprawne dane</p>");
	die(mysqli_error()."</body></html>");
}

	mysqli_close($database);	
	
	$flaga1=0;
	$flaga2=0;

	while ($row = mysqli_fetch_row($result)) {
		
		foreach ($row as $key => $value)
		
		if ($login==$row[1] && $haslo==$row[2]){
			$flaga1=1;
			setcookie("id",$row[0]);
			
			if(count($row)>3&&$row[3]!=null){
			$flaga2=1;
			$imie =$row[3];
			$nazwisko =$row[4];
			$wiek =$row[5];
			$pesel =$row[6];
			}
	}
	}
	if ($flaga1==1&&$flaga2==1)
		echo("Możesz zmodyfikować swoje dane");
	
	else if ($flaga1==1&&$flaga2==0)
	   echo("Uzupełnij swoje dane");
	
	else{
		
		
	$query = "INSERT INTO logowanie"."(login, haslo, imie, nazwisko, wiek, pesel )".
         "VALUES ( '$login', '$haslo',null, null, null, null) ";
		 
	if (!($database = mysqli_connect("localhost", "edyta", "haslo","dane")))
	die("Nie udało się zalogować");  

	if (!($result = mysqli_query($database, $query))) {
	print("<p>Niepoprawne dane</p>");
	die(mysqli_error()."</body></html>");
}

	mysqli_close($database);	
	
	echo "Witaj nowy uzytkowniku! Wypełnij swoje dane.";
	}
	}
		
	if(isset($_POST['Zapisz']))	{
		
		if (!preg_match('/^[A-ZŁŚ]{1}+[a-ząęółśżźćń]+$/', $_POST["imie"])) {
		print("<p class = 'error'>Zły format (imie). </p>
               <p>Kliknij wstecz i odśwież, aby powrócić do formularza.</p>
               </body></html>");
		die();
	}

if (!preg_match('/^[A-ZŁŚ]{1}+[a-ząęółśżźćń]+$/', $_POST["nazwisko"])) {
		print("<p class = 'error'>Zły format (nazwisko). </p>
               <p>Kliknij wstecz i odśwież, aby powrócić do formularza.</p>
               </body></html>");
		die();
	}	

if (!preg_match('/^[0-9]+$/', $_POST["wiek"])) {
		print("<p class = 'error'>Zły format (wiek). </p>
               <p>Kliknij wstecz i odśwież, aby powrócić do formularza.</p>
               </body></html>");
		die();
	}
	
if (!preg_match('/^[0-9]{11}+$/', $_POST["pesel"])) {
		print("<p class = 'error'>Zły format (pesel). </p>
               <p>Kliknij wstecz, aby powrócić do formularza.</p>
               </body></html>");
		die();
	}
	
 $slogin = isset($_POST[ "login" ]) ? $_POST[ "login" ] : "";
 $shaslo = isset($_POST[ "haslo" ]) ? $_POST[ "haslo" ] : "";	 
 $simie = isset($_POST[ "imie" ]) ? $_POST[ "imie" ] : "";	
 $snazwisko = isset($_POST[ "nazwisko" ]) ? $_POST[ "nazwisko" ] : "";
 $swiek = isset($_POST[ "wiek" ]) ? $_POST[ "wiek" ] : ""; 
 $spesel = isset($_POST[ "pesel" ]) ? $_POST[ "pesel" ] : "";


$sid=$_COOKIE["id"];

	
$query = "UPDATE logowanie SET login='$slogin', haslo='$shaslo', imie='$simie', nazwisko='$snazwisko', wiek='$swiek', pesel= '$spesel'
         WHERE ID='$sid' ";        
   
   
if (!($database = mysqli_connect("localhost", "edyta", "haslo","dane")))
	die("Nie udało się zalogować");  

if (!($result = mysqli_query($database, $query))) {
	print("<p>Niepoprawne dane</p>");
	die(mysqli_error()."</body></html>");
}
echo "Baza zmodyfikowana.<br>";
 echo("Możesz znów zmodyfikować swoje dane");
mysqli_close($database);
		
		
	}
