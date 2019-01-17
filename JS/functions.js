function listener(){
	
	var button=document.getElementById("btn1");
	button.addEventListener("click", welcome);
}



function welcome(){
	 
    var person = window.prompt("Wpisz swoje imię", "Anonim");
    if (person != null ) {
        document.getElementById("demo").innerHTML =
        "Witaj " + person + "! Zapraszamy na naszą stronę!";
		}
		else window.alert("Anulowałeś akcję");
}

	
	
var numer=Math.floor(Math.random()*3)+1;
var plik="<img src=\"img/dcf.jpg\" width=\"400\" height=\"200\"/>";
function zmienObraz(){
	numer++;
	if(numer>3) numer=1;
	switch(numer){
							case 1: 	{plik="<img src=\"img/dcf.jpg\" width=\"400\" height=\"200\"/>";
										break;}
							case 2: 	{plik=plik="<img src=\"img/cinema.jpg\" width=\"400\" height=\"200\"/>";
										break;}	
							case 3: 	{plik=plik="<img src=\"img/nowe.jpg\" width=\"400\" height=\"200\">";;
										break;}											
										
	}
	document.getElementById("Changer").innerHTML=plik;
	setTimeout("zmienObraz()",2000);}

	
	

function windowListener(){
	
	window.addEventListener("click", function(){
	ocena=window.prompt("Twoja ocena strony", "0")
	if (ocena != null ) {
	document.getElementById("ocena").innerHTML =parseFloat(ocena);}})
		
		
	
}
	
	
