<!DOCTYPE html>

<html>
   <head>
      <meta charset = "utf-8">
      <title>wynik</title>
      <style type = "text/css">
		
		.error {
			color: red
		}
		p.head {
			
			margin-top: 10px;
		}
      </style>
   </head>
   <body>
   	
   	<?php ini_set('display_errors', 1);
		error_reporting(E_ALL); ?>
   	
      <?php
	if(!isset($_POST["submit"])){
	echo 'bład wypełnienia';
	die();
}
            
	if (!preg_match("/^\+[4][8]\-[0-9]{3}\-[0-9]{6}$/", $_POST["telefon"])) {
		print("<p class = 'error'>Zły format telefonu</p>
               <p>Musi być postaci +48-111-111111</p>
               <p>Kliknij wstecz, aby powrócić do folmularza.</p>
               </body></html>");
		die();
		
	}
	
	if (!preg_match('/^[A-ZŁŚ]{1}+[a-ząęółśżźćń]+$/', $_POST["imie"])) {
		print("<p class = 'error'>Zły format</p>
               <p>Kliknij wstecz, aby powrócić do folmularza.</p>
               </body></html>");
		die();
		
	}
	
	
      ?>
      
      <p><?php print($_POST["imie"]); ?>, dziękujemy za wypełnienie ankiety. <br>
      </p>
      
	  <p><b> Twoje dane osobowe</b><br></p>
      <table border=1>
      	<thead>
      	<tr>
      	<th>Imię</th>
      	<th>Nazwisko</th>
      	<th>Telefon</th>
      	<th>Wiek</th>
      	<th>Płeć</th>
      	<th>Zainteresowania</th>
      	</tr>
      	</thead>
      	
      	<tbody>
      	<tr>
      	<td><?php print($_POST["imie"]); ?></td>
      	<td><?php print($_POST["nazwisko"]); ?></td>
      	<td><?php print($_POST["telefon"]); ?></td>
       	<td><?php print($_POST["wiek"]); ?></td>
      	<td><?php print($_POST["plec"]); ?></td>
      	<td><?php  $number = count($_POST['temat']);
					for($i = 0; $i < $number; $i++)
					{
					echo $_POST['temat'][$i].' ';
					}
		?></th>
      	</tr>
      	</tbody>
      </table>
		<br>
      <p>
	  
	   <p><b> Dane o edukacji </b><br></p>
	  <?php
 
	$UserInfo["Nazwisko"] = $_POST["nazwisko"];
	$UserInfo["Uczelnia"]   = $_POST["uczelnia"];

	foreach($UserInfo as $klucz => $biezacy)
    echo $klucz.': '.$biezacy.'<br />';

	
	if(!strcmp("Politechnika Wrocławska", $_POST["uczelnia"]))
   echo "Studiujesz we Wrocławiu!";
	if("Uniwersytet Jagielloński"===$_POST["uczelnia"])
   echo "Studiujesz w Krakowie!";
	
	?>
	<p><b> Umiejętności </b><br></p>
	<?php
	
	$Skills["Jazda autem"] = $_POST["um1"];
	$Skills["Język angielski"] = $_POST["um2"];
 
 
	while ($skill = current($Skills)) {
    
    echo key($Skills).', poziom: '.$skill.'/5'.'<br />';
    
    next($Skills);}
	
	echo 'NAJWAŻNIEJSZA UMIEJĘTNOŚĆ-prowadzenia auta: '.reset($Skills).'<br />';

	?>
	 <p><b>***</b><br></p>
	 
	<?php
	$string = 'Teraz następne dane'.'<br />';
	echo($string);
	$pattern = '/Teraz/';
	$replacement = 'Twoje';
	echo preg_replace($pattern, $replacement, $string);
	?>	 
	 


	 
	<p><b>Sprawdzenie kryteriów</b><br></p>
	 <?php
	define('minimum', '3');
	
	$poziom1=$_POST["um1"];
	$poziom2=$_POST["um2"];
	$srednia= ($poziom1+$poziom2)/2;
	$granica='4';
	$granica1=$srednia-$granica;
	
	if(minimum>$poziom1)
	echo 'nie możesz być kierowcą <br />';
	else echo'możesz być kierowcą <br />';
	
	echo 'średnia twoich umiejętności to: '. (string)$srednia.'<br />';
	echo "jesteś ponad średnią o: $granica1 <br />";
	echo "jesteś ponad średnią o: \$granica1";
	?>	 
	    
	  
	  
   <pre>
 	<?php 
 	
 		switch($_POST['sglobalne']){
			case 'serwer': print_r($_SERVER);
			break;
			case 'post': print_r($_POST);
			break;
			default;
 		}
		
 	
 	
 	
 	?>
</pre>
   </body>
</html>