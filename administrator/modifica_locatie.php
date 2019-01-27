<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificare locatii</title>
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
	  <h1 class="header">Modificare loca&#355;ii</h1>
	  	  <div id ="navbar">
			<ul id = "navul">
			    <li>
				   <a onmouseover="mopen('m1')" onmouseout="mclosetime()" href="gestiune_locatie.html" class="selected">Gestiune Loca&#355;ii</a>
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
	</div>
<div id="leftcontent">

<br><br><br><br><br><br><br><br><br><br><br><br>
<table width="100%" border="1" frame="border"  >
  <tbody>
    <tr>
      <td>
      <br> <br> 
      <form id="modificaLocatie" name="modificaLocatieForm" method="GET" action="#">
      <label><b>Modific&#259; loca&#355;ie</b></label>
<br>
<br>
<br>
<br>
<p> <b>  Nu uitati sa bifati campurile care doriti sa le modificati !!! </b> </p>
<br>
<br>
<br>
<br>
   <label for="textfield"><b>Telefon :</b></label>
   <input type="text" name="telefon" id="telefon3"/>
   <br>
   <br>
   <input type="checkbox" name="stradac" id="strada">
   <label for="checkbox"><b>Strada :</b></label>
   <input type="text" name="stradatxt" id="strada3">
   <br>
   <br>
   <input type="checkbox" name="numarc" id="numar">
   <label for="checkbox"><b>Num&#259;r :</b></label>
   <input type="text" name="numartxt" id="numar3">
   <br>
   <br>
   <input type="checkbox" name="orasc" id="oras">
   <label for="checkbox"><b>Ora&#351; :</b></label>
   <input type="text" name="orastxt" id="oras3">
   <br>
   <br>
   <input type="checkbox" name="codPostalc" id="codPostal">
   <label for="checkbox"><b>Cod Po&#351;tal :</b></label>
   <input type="text" name="codpostaltxt" id="codPostal3">
   <br>
   <br>
   <input type="submit" id="trimiteLocatie2" value="Trimite">
   
   <?php
	$telefon="";
	  if( isset( $_GET['telefon'] ) ) {
        $telefon = $_GET['telefon'];
      }
	$strada="";
	  if( isset( $_GET['stradatxt'] ) ) {
        $strada = $_GET['stradatxt'];
      }
    $numar="";
	  if( isset( $_GET['numartxt'] ) ) {
        $numar = $_GET['numartxt'];
      }
	$oras="";
	  if( isset( $_GET['orastxt'] ) ) {
        $oras = $_GET['orastxt'];
      }
	$codpostal="";
	  if( isset( $_GET['codpostaltxt'] ) ) {
        $codpostal = $_GET['codpostaltxt'];
      }
	  if($telefon!=""){
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
	  $result=$conn->query("SELECT * FROM adresa WHERE telefon='$telefon' "); 
	  $row=$result->fetch_row();
	  $idinregistrare=$row[0];
	  $sql_strada=$row[1];
	  $sql_numar=$row[2];
	  $sql_oras=$row[3];
	  $sql_codpostal=$row[4];
	  
	   if(isset($_GET['stradac']))
		  $strada=$strada;
	  else
		  $strada=$sql_strada;
	  
	  if(isset($_GET['numarc']))
		  $numar=$numar;
	  else
		  $numar=$sql_numar;
	  
	  if(isset($_GET['orasc']))
		  $oras=$oras;
	  else
		  $oras=$sql_oras;
	  
	  if(isset($_GET['codpostalc']))
		  $codpostal=$codpostal;
	  else
		  $codpostal=$sql_codpostal;
	  
	  $script= "UPDATE adresa SET strada='$strada', numar='$numar',oras='$oras',codpostal='$codpostal' WHERE idadresa='$idinregistrare'" ;
	  //4 Trimite interogarea $script la MySQL pentru a introduce valorile
	  if($conn->query($script))
	  {
		  echo 'Datele au fost modificate cu succes';
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
    </td>
</tr>
  </tbody>
</table>
      
</div>
</body>
</html>
