<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Stergere Utilizator</title>
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
      <h1 class="header">&#350;tergere Utilizator</h1>
	</div>
<div id="leftcontent">

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
     <form id="stergePersoana1" name="stergePersoanaForm" method="GET" action="#">
      <input type="checkbox" name="stergePersoana" id="sterge">
      <label for="checkbox"><b>&#350;terge persoana</b></label>
<br>
<br>
   <label for="textfield"><b>Nume :</b></label>
   <input type="text" name="nume" id="nume2"/>
   <br />
   <br />
   <label for="textfield"><b>Prenume :</b></label>
   <input type="text" name="prenume" id="prenume2"/>
   <br />
   <br />
   <input type="submit" id="stergePersoana2" value="&#350;terge">
   
   <?php
	  $nume="";
	  if( isset( $_GET['nume'] ) ) {
        $nume = $_GET['nume'];
      }
	  $prenume="";
	  if( isset( $_GET['prenume'] ) ) {
        $prenume = $_GET['prenume'];
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
	  $script= "DELETE FROM persaoana WHERE nume='$nume' AND prenume='$prenume' " ;
	  //4 Trimite interogarea $script la MySQL pentru a introduce valorile
	  if($conn->query($script))
	  {
		  echo 'Stergerea a fost facuta cu succes!';
	  }
	  else
	  {
	    echo 'Error:'.$conn->error;
	  }
	  //5.Inchiderea conexiunii
	  $conn->close();
	  }
	  ?>
           
     </form></td>
</tr>
  </tbody>
</table>
      
</div>
</body>
</html>
