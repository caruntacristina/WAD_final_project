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
				   <a onmouseover="mopen('m1')" onmouseout="mclosetime()" href="gestiune_locatie.html" >Gestiune Loca&#355;ii</a>
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
				   <a onmouseover="mopen('m3')" onmouseout="mclosetime()" href="gestiune_restaurante.html">Gestiune Restaurante </a>
				   <div id="m3"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				       <a href="adauga_restaurante.php">Adaug&#259; Restaurant</a>
					   <a href="stergere_restaurante.php">&#350;tergere Restaurant</a>
					   <a href="modificare_restaurante.php">Modificare Restaurant</a>
				   </div>
				</li>
				<li>
				   <a  onmouseover="mopen('m4')" onmouseout="mclosetime()" class="selected" href="gestiune_utilizatori.html" >Gestiune utilizatori</a>
				   <div id="m4"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				       <a href="adauga_persoana.php">Adaug&#259; Utilizator</a>
					   <a href="stergere_persoana.php">&#350;tergere Utilizator</a>
					   <a href="modificare_persoana.php">Modificare Utilizator</a>
				   </div>
				</li>
				<li> <a href="index.html"> Admin </a></li>
		</ul>
	  </div>
      <h1 class="header">Modificare hoteluri</h1>
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
 <br>

<table width="100%" border="1" frame="border"  >
  <tbody>
    <tr>
      <td>
	  <br>
	  <br>
	  <br>
     <form id="modificaHotel" name="modificaHotelForm" method="GET" action="#">
      <label><b>Modific&#259; hotel</b></label>
<br>
<br>
<br>
<br>
<p> <b>  Nu uitati sa bifati campurile care doriti sa le modificati !!! </b> </p>
<br>
<br>
<br>
<br>
    <label for="textfield"><b>Nume :</b></label>
    <input type="text" name="numetxt" id="nume3"/>
   <br>
   <br>
   
   <input type="checkbox" name="nrstelec" id="nrstele">
   <label for="checkbox"><b>Num&#259;r stele :</b></label>
   <input type="text" name="nrsteletxt" id="nrstele3">
   
   <br>
   <br>
   <input type="checkbox" name="capacitatec" id="capacitate">
   <label for="checkbox"><b>Capacitate :</b></label>
   <input type="text" name="capacitatetxt" id="capacitate3">
   <br>
   <br>
   <input type="checkbox" name="nrcamereliberec" id="nrcamerelibere">
   <label for="checkbox"><b>Num&#259;r camere libere :</b></label>
   <input type="text" name="nrcamereliberetxt" id="nrcamerelibere3">
   <br>
   <br>
   <input type="submit" id="trimiteLocatie2" value="Trimite">  

   <?php
	$nume="";
	  if( isset( $_GET['numetxt'] ) ) {
        $nume = $_GET['numetxt'];
      }
    $nrstele="";
	  if( isset( $_GET['nrsteletxt'] ) )
	  {
        $nrstele = $_GET['nrsteletxt'];
      }
	$capacitate="";
	  if( isset( $_GET['capacitatetxt'] ) ) {
        $capacitate = $_GET['capacitatetxt'];
      }
	$nrcamerelibere="";
	  if( isset( $_GET['nrcamereliberetxt'] ) ) {
        $nrcamerelibere = $_GET['nrcamereliberetxt'];
      }

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
	  $result=$conn->query("SELECT * FROM hoteluri WHERE nume='$nume' "); 
	  $row=$result->fetch_row();
	  $idinregistrare=$row[0];
	  $sql_nume=$row[2];   
	  $sql_nrstele=$row[3];
	  $sql_capacitate=$row[4];
	  $sql_nrcamerelibere=$row[5];
	  
	  if($idinregistrare!=""){
	  
	  if(isset($_GET['nrstelec']))
		  $nrstele=$nrstele;
	  else
		  $nrstele=$sql_nrstele;
	  
	  if(isset($_GET['capacitatec']))
		  $capacitate=$capacitate;
	  else
		  $capacitate=$sql_capacitate;
	  
	  if(isset($_GET['nrcamereliberec']))
		  $nrcamerelibere=$nrcamerelibere;
	  else
		  $nrcamerelibere=$sql_nrcamerelibere;
	  
	  $script= "UPDATE hoteluri SET nume='$nume',nrstele='$nrstele',capacitate='$capacitate',nrcamerelibere='$nrcamerelibere' WHERE idhotel='$idinregistrare'" ;
  
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
