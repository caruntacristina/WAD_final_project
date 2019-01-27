<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gestionare hoteluri</title>
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
				   <a onmouseover="mopen('m2')" onmouseout="mclosetime()" class="selected" href="gestiune_hoteluri.html">Gestiune Hoteluri</a>
				   <div id="m2"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				       <a href="adauga_hotel.php">Adaug&#259; Hotel</a>
					   <a href="stergere_hoteluri.php">&#350;tergere Hotel</a>
					   <a href="modificare_hoteluri.php">Modificare Hotel</a>
				   </div>
				</li>
				<li>
				   <a onmouseover="mopen('m3')" onmouseout="mclosetime()"  href="gestiune_restaurante.html">Gestiune Restaurante </a>
				   <div id="m3"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				       <a href="adauga_restaurante.php">Adaug&#259; Restaurant</a>
					   <a href="stergere_restaurante.php">&#350;tergere Restaurant</a>
					   <a href="modificare_restaurante.php">Modificare Restaurant</a>
				   </div>
				</li>
				<li>
				   <a  onmouseover="mopen('m4')" onmouseout="mclosetime() href="gestiune_utilizatori.html" >Gestiune utilizatori</a>
				   <div id="m4"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				       <a href="adauga_persoana.php">Adaug&#259; Utilizator</a>
					   <a href="stergere_persoana.php">&#350;tergere Utilizator</a>
					   <a href="modificare_persoana.php">Modificare Utilizator</a>
				   </div>
				</li>
				<li> <a href="index.html"> Admin </a></li>
		</ul>
	  </div>
      <h1 class="header">Ad&#259;ugare Hotel</h1>
	</div>
<div id="leftcontent">

   <br> <br>    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
  

<table width="100%" border="1" frame="border"  >
  <tbody>
    <tr>
      <td>
      <form id="adaugaHotel" name="adaugaHotel" method="GET" action="#" onsubmit="return checkForm(this);">
<br>
<br>
   <label for="textfield"><b>Nume hotel :</b></label>
   <input type="text" name="hotel" id="nume1"/>
   <br />
   <br />
   <label for="textfield"><b>Num&#259;r stele :</b></label>
   <input type="text" name="stele" id="numar1"/>
   <br />
   <br />
   <label for="textfield"><b>Capacitate :</b></label>
   <input type="text" name="capacitate" id="capacitate1"/>
   <br />
   <br />
   <label for="textfield"><b>Num&#259;r camere libere :</b></label>
   <input type="text" name="camere" id="camere1"/>
   <br />
   <br />
   <input type="submit" id="adauga" value="Adaug&#259;">
   <?php
    $hotel="";
	  if( isset( $_GET['hotel'] ) ) {
        $hotel = $_GET['hotel'];
      }
    $stele="";
	  if( isset( $_GET['stele'] ) ) {
        $stele = $_GET['stele'];
      }
    $capacitate="";
	  if( isset( $_GET['capacitate'] ) ) {
        $capacitate = $_GET['capacitate'];
      }
	$camerelibere="";
	  if( isset( $_GET['camere'] ) ) {
        $camerelibere = $_GET['camere'];
      }
	  
	  if($hotel!="" && $stele="" && $capacitate && $camerelibere!=""){
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
	  $result=$conn->query("SELECT idhotel FROM hoteluri ORDER BY idhotel DESC"); //incrementeaza id
	  $row=$result->fetch_row();
	  $idhotel=$row[0];
	  $idhotel=$idhotel+1;
	  $script= "INSERT INTO hoteluri (`idhotel`,`nume`,`nrstele`,`capacitate`,`nrcamerelibere`,`idAdresa`) 
	  VALUES ('$idhotel','$hotel','$stele','$capacitate','$camerelibere','110')" ;
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
  var hotel = frm.hotel;
  var stele = frm.stele;
  var capacitate=frm.capacitate;
  var camere= frm.camere;

if(hotel.value.search(regx_nume)==-1) {
    alert('Nu ati introdus un nume valid de hotel');
    strada.select();    // selecteaza casuta pt. Nume
}
else if(stele.value.length!=1 || stele.value<1 || stele.value>5){
	alert("Ati introdus un numar de stele care nu e valid!");
	numar.select();
}
else if(capacitate.value<=0 || capacitate.value>=200){
	alert("Ati introdus un numar gresit de camere!");
	cod.select();
}
else if(capacitate.value<camere.value){
	alert("Numarul de camere libere este mai mare decat numarul de camere!");
	cod.select();
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

     
      
     
    </form>
  
    </td>
</tr>
  </tbody>
</table>
      
</div>
</body>
</html>
