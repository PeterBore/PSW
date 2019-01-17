
var currentNode;
var idcount = 0;

var last_position=0;

function doSomething(scroll_pos){
}

document.body.addEventListener('wheel', function(event){
	
		if (event.deltaY>0) {
                                document.body.style.backgroundColor.fadeIn();
                            } else {
                                document.body.style.backgroundColor.fadeOut();
                            }
})

function start()
{
	
	document.getElementById("byIdButton").addEventListener("click", byId, false );
	document.getElementById("insertButton").addEventListener("click", insert, false );
	document.getElementById("appendButton").addEventListener("click", appendNode, false );
	document.getElementById("replaceButton").addEventListener("click", replaceCurrent, false );
	document.getElementById("removeButton").addEventListener("click", remove, false );
	document.getElementById("parentButton").addEventListener("click", parent, false );
	document.getElementById("linki").addEventListener("click",liczbaLinkow,false);
	document.getElementById("zdjecia").addEventListener("click",liczbaZdjec,false);
	document.getElementById("formularzButton").addEventListener("click",liczbaFormularzy,false);
	document.getElementById("anchors1").addEventListener("click",anchors1,false);
	document.getElementById("pierwszyP").addEventListener("click",firstP,false);
	document.getElementById("pAlert").addEventListener("click",pAlert,false);
	document.getElementById("kolorTlaH").addEventListener("click",kolorTla,false);
	document.getElementById("kolorTekstuH").addEventListener("click",kolorTekstu,false);
	document.getElementById("czcionka").addEventListener("click",zmianaCzcionki,false);

   currentNode = document.getElementById( "logoStrony" );
} 

window.addEventListener( "load", start, false );

function byId()
{
   var id = document.getElementById( "gbi" ).value;
   var target = document.getElementById( id );

   if ( target )
      switchTo( target );
}

function insert()
{
   var newNode = createNewNode(
      document.getElementById( "ins" ).value );
   currentNode.parentNode.insertBefore( newNode, currentNode );
   switchTo( newNode );
} 

function appendNode()
{
   var newNode = createNewNode(
      document.getElementById( "append" ).value );
   currentNode.appendChild( newNode );
   switchTo( newNode );
}

function replaceCurrent()
{
   var newNode = createNewNode(
      document.getElementById( "replace" ).value );
   currentNode.parentNode.replaceChild( newNode, currentNode );
   switchTo( newNode );
} 

function remove()
{
   if ( currentNode.parentNode == document.body )
      alert( "Can't remove a top-level element." );
   else
   {
      var oldNode = currentNode;
      switchTo( oldNode.parentNode );
      currentNode.removeChild( oldNode );
   }
} 

function parent()
{
   var target = currentNode.parentNode;

   if ( target != document.body )
      switchTo( target );
   else
      alert( "No parent." );
} 

function createNewNode( text )
{
   var newNode = document.createElement( "p" );
   nodeId = "new" + idcount;
   ++idcount;
   newNode.setAttribute( "id", nodeId );
   text = "[" + nodeId + "] " + text;
   newNode.appendChild( document.createTextNode( text ) );
   return newNode;
}

function switchTo( newNode )
{
   currentNode.setAttribute( "class", "" ); 
   currentNode = newNode;
   currentNode.setAttribute( "class", "highlighted" );
   document.getElementById( "gbi" ).value = 
      currentNode.getAttribute( "id" );
} 

function liczbaLinkow() {
    var x = document.links.length;
    document.getElementById("liczbaLinkowNaStronie").innerHTML = x;
}

function liczbaZdjec() {
    var x = document.images.length;
    document.getElementById("liczbaLinkowNaStronie").innerHTML = x;
}


function liczbaFormularzy() {
    var x = document.forms.length;
    document.getElementById("liczbaLinkowNaStronie").innerHTML = x;
}

function anchors1() {
    var x = document.anchors.length;
    document.getElementById("liczbaLinkowNaStronie").innerHTML = x;
}

function firstP() {
    var nodelist = document.getElementsByTagName("P").item(0).innerHTML;
    document.getElementById("liczbaLinkowNaStronie").innerHTML = nodelist;
}

function itemss() {
    var x = document.getElementsByTagName("P").namedItem("pierwszy");
    alert(x.innerHTML);
}

function tagName() {
    var x = document.getElementById("pierwszy").parentNode.nodeName;
    document.getElementById("liczbaLinkowNaStronie").innerHTML = x;
}

function kolorTla() {
    var x = document.getElementById("mojKolorTla").value;
    document.body.style.backgroundColor = x;
}

function kolorTekstu() {
    var x = document.getElementById("mojKolorTla").value;
    document.getElementById("tytulStrony").style.color = x;
}

function zmianaCzcionki() {
    var e = document.getElementById("czcionki");
    var strUser = e.options[e.selectedIndex].value;
    document.getElementById("tytulStrony").style.fontFamily = strUser;
}

function isKeyPressed(event) {
    if (event.altKey) {
        alert("ALT");
    } else if (event.ctrlKey) {
        alert("CTRL");
    } else if (event.shiftKey) {
        alert("SHIFT");
    } else {
        alert("ZŁY PRZYCISK");
    }
}

function getKeyCode(event) {
    var x = event.which || event.keyCode;
    document.getElementById("wyswietlacz").innerHTML = "Kod klawisza to : " + x;
}

function funkcjaWspolrzedne(e) {
    var x = e.clientX;
    var y = e.clientY;
    var coor = "wspolrzedne: (" + x + "," + y + ")";
    document.getElementById("wspolrzedne").innerHTML = coor;
}

function clearCoor() {
    document.getElementById("wspolrzedne").innerHTML = "";
}

function showCoords(event) {
    var x = event.screenX;
    var y = event.screenY;
    var coords = "X: " + x + ", Y: " + y
    document.getElementById("wspolrzedne").innerHTML = coords;
}


function bigImg(x) {
    x.style.height = "75px";
    x.style.width = "75px";
}

function normalImg(x) {
    x.style.height = "45px";
    x.style.width = "45px";
}

function mouseDown() {
    document.getElementById("mojTekst").style.color = "yellow";
}

function mouseUp() {
    document.getElementById("mojTekst").style.color = "red";
}

function getFocus() {
    document.getElementById("wpiszTekst").focus();
}
function loseFocus() {
    document.getElementById("wpiszTekst").blur();
}