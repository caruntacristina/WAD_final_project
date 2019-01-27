<!doctype html>
<html>
<head>
<title>Gestionare restaurante</title>
<link href="screen.css" rel="stylesheet" type="text/css">

<script language="JavaScript" type="text/javascript">
    <!--
     var timeout = 500;
     var closetimer = 0;
     var ddmenuitem = 0; 
    // deschide stratul ascuns
    function mopen(id)
    { 
       // anuleaza close-timer-ul (pentru inchiderea pop-upurilor
       // dupa o perioada de timp pre-determinata)
       mcancelclosetime(); 
       // inchide stratul vechi
       if(ddmenuitem) ddmenuitem.style.visibility = 'hidden'; 
       // obtine urmatorul strat si afiseaza-l
       ddmenuitem = document.getElementById(id);
       ddmenuitem.style.visibility = 'visible'; 
    }
    // inchide stratul afisat
    function mclose()
    {
      if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
    } 
    // mergi la close timer
    function mclosetime()
     {
       closetimer = window.setTimeout(mclose, timeout);
     } 
    // anuleaza close timer
    function mcancelclosetime()
    {
       if(closetimer)
      {
            window.clearTimeout(closetimer);
            closetimer = null;
      }
    } 
     // inchide stratul la click-out
     document.onclick = mclose;
  
    --> 
	</script>
</head>

<body>
 <div id ="container">
	<div id="top">
	  	 <div id ="navbar">
			<ul id = "navul">
			    <li>
				   <a onmouseover="mopen('m1')" onmouseout="mclosetime()" href="gestiune_locatie.html">Gestiune Loca&#355;ii</a>
				   <div id="m1"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				       <a href="adauga_locatie.php">Adaug&#259; Loca&#355;ie</a>
					   <a href="sterge_locatie.php">&#350;tergere Loca&#355;ie</a>
					   <a href="modifica_locatie.php">Modificare Loca&#355;ie</a>
				   </div>
				</li>
				<li>
				   <a onmouseover="mopen('m2')" onmouseout="mclosetime()" href="gestiune_hoteluri.html">Gestiune Hoteluri</a>
				   <div id="m2"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				       <a href="adauga_hotel.php">Adaug&#259; Hotel</a>
					   <a href="stergere_hoteluri.php">&#350;tergere Hotel</a>
					   <a href="modificare_hoteluri.php">Modificare Hotel</a>
				   </div>
				</li>
				<li>
				   <a onmouseover="mopen('m3')" onmouseout="mclosetime()" class="selected" href="gestiune_restaurante.html">Gestiune Restaurante </a>
				   <div id="m3"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				       <a href="adauga_restaurante.php">Adaug&#259; Restaurant</a>
					   <a href="stergere_restaurante.php">&#350;tergere Restaurant</a>
					   <a href="modificare_restaurante.php">Modificare Restaurant</a>
				   </div>
				</li>
				<li>
				   <a  onmouseover="mopen('m4')" onmouseout="mclosetime()" href="gestiune_utilizatori.html" >Gestiune utilizatori</a>
				   <div id="m4"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				       <a href="adauga_persoana.php">Adaug&#259; Utilizator</a>
					   <a href="stergere_persoana.php">&#350;tergere Utilizator</a>
					   <a href="modificare_persoana.php">Modificare Utilizator</a>
				   </div>
				</li>
				<li> <a href="index.html"> Admin </a></li>
		</ul>
	  </div>
	  <h1 class="header">Adaug&#259; Restaurant</h1>
	</div>
<div id="leftcontent">

      
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

<table width="100%" border="1" frame="border"  >
  <tbody>
    <tr>
      <td>
      <form id="adaugaRestaurant" name="adaugaRestaurant" method="GET" action="#" onsubmit="return checkForm(this);">
<br>
<br>
   <label for="textfield"><b>Nume restaurant :</b></label>
   <input type="text" name="nume" id="nume1"/>
   <br />
   <br />
   <input type="submit" id="adauga" value="Adaug&#259;">
   
   <?php
    $nume="";
	  if( isset( $_GET['nume'] ) ) {
        $nume = $_GET['nume'];
      }
      if($nume!=""){
		$servername = "localhost";
$username = "root";
$password = "";
$database_name="turism";
	  //1.Crearea conexiunii
	  $conn= new mysqli($servername, $username, $password,$database_name);
	  //2.Verificarea conexiunii
	  if($conn->connect_error)
	  {
		  die("Connection failed: ".$conn->connect_error);
	  }
	  //3.Definirea interogarii
	  $result=$conn->query("SELECT idrestaurant FROM restaurante ORDER BY idrestaurant DESC"); //incrementeaza id
	  $row=$result->fetch_row();
	  $idrestaurant=$row[0];
	  $idrestaurant=$idrestaurant+1;
	  $script= "INSERT INTO restaurante (`idrestaurant`,`nume`,`idadresa`) 
	  VALUES ('$idrestaurant','$nume',113)" ;
	  //4 Trimite interogarea $script la MySQL pentru a introduce valorile
	  if($conn->query($script))
	  {
		  echo 'Datele au fost gasite';
	  }
	  else
	  {
	    echo 'Error:'.$conn->error;
	  }
	  //5.Inchiderea conexiunii
	  $conn->close();
	  }
	  ?>
      </form>
	  <script type="text/javascript"><!--

    var regx_nume = /^([a-zA-Z' ']+)$/;
    
	// Functia care e apelata la "onsubmit"
// preia campurile din formular, verifica /valideaza datele adaugate
function checkForm(frm) {
  var fre = false;             // variabila ce va fi returnata de functie

  // preluare casete formular
  var nume = frm.nume;


  // verificare valori (Nume, Parola, E-mail), daca sunt incorecte, returneaza alert si selecteaza casuta
if(nume.value.length<3 || nume.value.search(regx_nume)==-1) {
    alert('Nu ati introdus un nume valid de restaurant');
    strada.select();    // selecteaza casuta pt. Nume
}

else fre = true;

 return fre;
}
    -->
</script>
	  </td>
</tr>
  </tbody>
</table>
</div>
</body>
</html>
