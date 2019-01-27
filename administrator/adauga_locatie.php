<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gestionare locatii - Adaugare</title>
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
	  <h1 class="header">Ad&#259;ugare loca&#355;ie</h1>
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
	</div>
<div id="leftcontent">
 
      <form id="adaugareLocatie" name="adaugaLocatieForm" method="GET" action="#" onsubmit="return checkForm(this);">
      <label><b>Adaug&#259; loca&#355;ie</b></label>
<br>
<br>

  <label for="textfield2"><strong>Strada :</strong></label>
  <input type="text" name="strada" id="strada1" />
   <br />
   <br />
   <label for="textfield"><b>Num&#259;r :</b></label>
   <input type="text" name="numar" id="numar1"/>
   <br />
   <br />
   <label for="textfield"><b>Ora&#351; :</b></label>
   <input type="text" name="oras" id="oras1" />
   <br />
   <br />
   <label for="textfield"><b>Cod po&#351;tal :</b></label>
   <input type="text" name="cod_postal" id="cod_postal1"/>
   <br />
   <br />
   <label for="textfield"><b>Telefon :</b></label>
   <input type="telephone" name="telefon" id="telefon"/>
   <br />
   <br />
   <input type="submit" id="trimiteLocatie" value="Trimite">
   
   <?php
    $strada="";
	  if( isset( $_GET['strada'] ) ) {
        $strada = $_GET['strada'];
      }
    $numar="";
	  if( isset( $_GET['numar'] ) ) {
        $numar = $_GET['numar'];
      }
    $oras="";
	  if( isset( $_GET['oras'] ) ) {
        $oras = $_GET['oras'];
      }
	$codpostal="";
	  if( isset( $_GET['cod_postal'] ) ) {
        $codpostal = $_GET['cod_postal'];
      }
	$telefon="";
	  if( isset( $_GET['telefon'] ) ) {
        $telefon = $_GET['telefon'];
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
	  $result=$conn->query("SELECT idadresa FROM adresa ORDER BY idadresa DESC"); //incrementeaza id
	  $row=$result->fetch_row();
	  $idadresa=$row[0];
	  $idadresa=$idadresa+1;
	  $script= "INSERT INTO adresa (`idadresa`,`strada`,`numar`,`oras`,`codpostal`,`telefon`) 
	  VALUES ('$idadresa','$strada','$numar','$oras','$codpostal','$telefon')" ;
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
    var regx_nr = /^([0-9]{1,4}[abcABC]*)$/;   
	var regx_codPostal= /^([0-9]{6})$/;
	var regx_nrTelefon= /^(07[2347][0-9]{7})$/
	// Functia care e apelata la "onsubmit"
// preia campurile din formular, verifica /valideaza datele adaugate
function checkForm(frm) {
  var fre = false;             // variabila ce va fi returnata de functie

  // preluare casete formular
  var strada = frm.strada;
  var numar = frm.numar;
  var oras = frm.oras;
  var cod= frm.cod_postal;
  var telefon=frm.telefon;

  // verificare valori (Nume, Parola, E-mail), daca sunt incorecte, returneaza alert si selecteaza casuta
if(strada.value.length<3 || strada.value.search(regx_nume)==-1) {
    alert('Nu ati introdus un nume valid de strada');
    strada.select();    // selecteaza casuta pt. Nume
}
else if(numar.value.length==0 || numar.value.length>4 || numar.value.search(regx_nr)==-1){
	alert("Ati introdus un numar care nu e valid!");
	numar.select();
}
else if(cod.value.length!=6 || cod.value.search(regx_codPostal)==-1){
	alert("Ati introdus un cod postal care nu e valid!");
	cod.select();
}
else if(telefon.value.search(regx_nrTelefon)==-1){
	alert("Numarul de telefon nu este valid");
	telefon.select();
}
else fre = true;

 return fre;
}
    -->
</script>
<br />
<br />

      
</div>
</body>
</html>
