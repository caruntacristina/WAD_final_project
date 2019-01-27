<!doctype html>
<html>
<head>
<title>Inregistrare utilizator</title>
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
	</div>
<div id="leftcontent">
<br>
<br>
<br>
<h1 class="header">&#206;nregistrare Utilizator</h1> 
<br>
<br>
<br>
<form id="adaugaPersoana" name="adaugaPersoana" method="GET" action="#" onsubmit="return checkForm(this);">
<br>
<br>
   <label for="textfield"><b>Nume :</b></label>
   <input type="text" name="nume" id="nume1"/>
   <br />
   <br />
   <label for="textfield"><b>Prenume :</b></label>
   <input type="text" name="prenume" id="prenume1"/>
   <br />
   <br />
  <label for="textfield"><b>V&#226;rst&#259; :</b></label>
       <label for="select">Select:</label>
  <select name="varsta" id="select" size="1">
     <option value="16"> 16 <option/>
     <option value="17"> 17 <option/>
     <option value="18"> 18 <option/>
     <option value="19"> 19 <option/>
     <option value="20"> 20 <option/>
     <option value="21"> 21 <option/>
     <option value="22"> 22 <option/>
     <option value="23"> 23 <option/>
     <option value="24"> 24 <option/>
     <option value="25"> 25 <option/>
     <option value="26"> 26 <option/>
     <option value="27"> 27 <option/>
     <option value="28"> 28 <option/>
     <option value="29"> 29 <option/>
     <option value="30"> 30 <option/>
     <option value="31"> 31 <option/>
     <option value="32"> 32 <option/>
     <option value="33"> 33 <option/>
     <option value="34"> 34 <option/>
     <option value="35"> 35 <option/>
     <option value="36"> 36 <option/>
     <option value="37"> 37 <option/>
     <option value="38"> 38 <option/>
     <option value="39"> 39 <option/>
     <option value="40"> 40 <option/>
     <option value="41"> 41 <option/>
     <option value="42"> 42 <option/>
     <option value="43"> 43 <option/>
     <option value="44"> 44 <option/>
     <option value="45"> 45 <option/>
     <option value="46"> 46 <option/>
     <option value="47"> 47 <option/>
     <option value="48"> 48 <option/>
     <option value="49"> 49 <option/>
     <option value="50"> 50 <option/>
     <option value="51"> 51 <option/>
     <option value="52"> 52 <option/>
     <option value="53"> 53 <option/>
     <option value="54"> 54 <option/>
     <option value="55"> 55 <option/>
     <option value="56"> 56 <option/>
     <option value="57"> 57 <option/>
     <option value="58"> 58 <option/>
     <option value="59"> 59 <option/>
     <option value="60"> 60 <option/>
     <option value="61"> 61 <option/>
     <option value="62"> 62 <option/>
     <option value="63"> 63 <option/>
     <option value="64"> 64 <option/>
     <option value="65"> 65 <option/>
     <option value="66"> 66 <option/>
     <option value="67"> 67 <option/>
     <option value="68"> 68 <option/>
     <option value="69"> 69 <option/>
     <option value="70"> 70 <option/>
     <option value="71"> 71 <option/>
     <option value="72"> 72 <option/>
     <option value="73"> 73 <option/>
     <option value="74"> 74 <option/>
     <option value="75"> 75 <option/>
     <option value="76"> 76 <option/>
     <option value="77"> 77 <option/>
     <option value="78"> 78 <option/>
     <option value="79"> 79 <option/>
     <option value="80"> 80 <option/>
     <option value="81"> 81 <option/>
     <option value="82"> 82 <option/>
     <option value="83"> 83 <option/>
     <option value="84"> 84 <option/>
     <option value="85"> 85 <option/>
     <option value="86"> 86 <option/>
     <option value="87"> 87 <option/>
     <option value="88"> 88 <option/>
     <option value="89"> 89 <option/>
     <option value="900"> 90+ <option/>
     
  </select>
        <br/>
      <br/>
   <label for="textfield"><b>Parola :</b></label>
   <input type="password" name="parola" id="parola1"/>
   <br />
   <br />
   <label for="textfield"><b>Username :</b></label>
   <input type="text" name="username" id="username1"/>
   <br />
   <br />
   <label for="textfield"><b>Email :</b></label>
   <input type="text" name="email" id="email1"/>
   <br />
       <br/>
<label for="textfield"><b>Sex</b></label>
       <p>
         <label>
           <input type="radio" name="sex" value="M" id="sex_0" />
           Masculin</label>
         <br />
         <label>
           <input type="radio" name="sex" value="F" id="sex_1" />
           Feminin</label>
         <br />
       </p>
       <br />
       <br/>
       <label for="textfield"><b>Telefon:</b></label>
       <input name="telefon" id="RecoveryPhoneCountry" type="tel">

  <br/>
      <br/>
   <input type="submit" id="adauga" value="Adaug&#259;">
   
   <?php
    $nume="";
	  if( isset( $_GET['nume'] ) ) {
        $nume = $_GET['nume'];
      }
    $prenume="";
	  if( isset( $_GET['prenume'] ) ) {
        $prenume = $_GET['prenume'];
      }
    $varsta="";
	  if( isset( $_GET['varsta'] ) ) {
        $varsta = $_GET['varsta'];
      }
	$parola="";
	  if( isset( $_GET['parola'] ) ) {
        $parola = $_GET['parola'];
      }
	$ussername="";
	  if( isset( $_GET['username'] ) ) {
        $ussername = $_GET['username'];
      }
	$email="";
	  if( isset( $_GET['email'] ) ) {
        $email = $_GET['email'];
      }

      $telefon="";
	  if( isset($_GET['telefon']))
	  {
		  $telefon=$_GET['telefon'];
	  }
	  $sex="";
	  if( isset($_GET['sex']))
	  {
		  $sex=$_GET['sex'];
	  }
	  if($sex=='M')
		  $sex=1;
	  else 
		  if($sex=='F')
			  $sex=2;

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
	  $result=$conn->query("SELECT id FROM persaoana ORDER BY id DESC"); //incrementeaza id
	  $row=$result->fetch_row();
	  $id=$row[0];
	  $id=$id+1;
	   $script= "INSERT INTO persaoana (`id`,`nume`,`prenume`,`varsta`,`parola`,`username`,`email`,`telefon`,`sex`)
	   VALUES ('$id','$nume','$prenume','$varsta','$parola','$ussername','$email','$telefon','$sex')" ;
	  //4 Trimite interogarea $script la MySQL pentru a introduce valorile
	  if($conn->query($script))
	  {
		  //echo 'Datele au fost gasite';
	  }
	  else
	  {
	    echo 'Error:'.$conn->error;
	  }
	  //5.Inchiderea conexiunii
	  $conn->close();
	  ?>
      </form>  
	  <script type="text/javascript">
	  <!--
      // RegExp care sa permite doar litere, numere si liniute "-", "_"
      var regx_chr = /^([a-zA-Z0-9_-]+)$/;
	  // RegExp pt. adresa e-mail
      var regx_mail = /^([a-zA-Z0-9]+[a-zA-Z0-9._%-]*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4})$/;    
	  
	  function checkForm(frm1) {
          var fre = false;             // variabila ce va fi returnata de functie

          // preluare casete formular
          var nume1 = frm1.username;
          var pass1 = frm1.parola;
          var email1 = frm1.email;
	  // verificare valori (Nume, Parola, E-mail), daca sunt incorecte, returneaza alert si selecteaza casuta
     if(nume1.value.length<3 || nume1.value.length>18 || nume1.value.search(regx_chr)==-1) {
         alert('Numele trebuie sa contina intre 3 si 18 caractere \nNumere, Litere, "-" si "_"');
         nume1.select();    // selecteaza casuta pt. Nume
    }
     else if(pass1.value.length<7 || pass1.value.length>18 || pass1.value.search(regx_chr)==-1) {
         alert('Parola trebuie sa contina intre 7 si 18 caractere \nNumere, Litere, "-" si "_"');
         pass1.select();    // selecteaza casuta pt. Parola
    }
    else if(email1.value.search(regx_mail)==-1) {
         alert('Adaugati o adresa de e-mail corecta');
         email1.select();    // selecteaza casuta pt. E-mail
    }
    else fre = true;
    return fre;
	  }
	  -->
  </script>
</div>

 
</body>
</html>
