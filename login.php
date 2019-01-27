<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Autentificare</title>
  <link href="screen.css" media="screen" rel="stylesheet"/>
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
	<script language="JavaScript"> 
    <!--
     // function redirect()
     // {
      //  top.location="http://site.com";
      ////}
      //if (top.frames.length==0)
      //{
      //    alert("Veti fi redirectionat spre contul dumneavoastra in 10 secunde!");
      //    setTimeout('redirect()',10000);
     // }
    //--> 
    </script>
 </head>
 <body>
  
    <div id ="container">
	    <div id="top">
	        <h1 class="header">Turism &#238;n Banat</h1>
	        <div id ="navbar">
			   <ul id = "navul">
				    <li><a href="restaurante.php">Restaurante</a></li>
				    <li><a href="hoteluri.php">Hoteluri</a></li>
				    <li><a href="index.html" >Home</a></li>
				    <li>
				       <a onmouseover="mopen('m2')" onmouseout="mclosetime()"  href="harta.html">Despre Banat</a>
				       <div id="m2"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                            <a href="./regiuni_turistice/timisoara.html">Timi&#351;oara</a>
                            <a href="./regiuni_turistice/recas.html">Reca&#351;</a>
                            <a href="./regiuni_turistice/resita.html">Re&#351;i&#355;a</a>
                            <a href="./regiuni_turistice/anina.html">Anina</a>
                            <a href="./regiuni_turistice/poiana_marului.html">Poiana M&#259;rului</a>
						    <a href="./regiuni_turistice/muntele_mic.html">Muntele Mic</a>
						    <a href="./regiuni_turistice/semenic.html">Semenic</a>
						    <a href="./regiuni_turistice/valiug.html">V&#259;liug</a>
						    <a href="./regiuni_turistice/cheile_nerei.html">Cheile Nerei</a>
						    <a href="./regiuni_turistice/clisura.html">Clisura Dun&#259;rii</a>
                        </div>
				    </li>
                    <li>
				        <a onmouseover="mopen('m1')" onmouseout="mclosetime()" class="selected">Contul meu</a>
				        <div id="m1"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				            <a href="login.php">Autentificare</a>
					        <a href="adauga_persoana.php">&#206;nregistrare utilizator</a>
				        </div>
				    </li>
		       </ul>
	       </div>
	    </div>
	   <div id="leftcontent">
	   <br>
	   <br>
	   <br>
	   <h1>Va rugam autentificati-va!</h1>
      <form id="form1" method="get" action="#">
       <br />
       <br />
      <label for="textfield"><b>User Name :</b></label>
      <input type="text" name="user" id="user" />
      <br/>
      <br/>
       <label for="textfield"><b>Password :</b></label>
      <input type="password" name="password" id="password" width="8"/>
	  <br/>
	  <br/>
	  <input type="submit" name="autentificare" id="autentificare" value="Autentificare" />
	  <?php
	  
	  $pasword="";
	  if( isset( $_GET['password'] ) ) {
        $pasword = $_GET['password'];
      }
	  $ussername="";
	  if( isset($_GET['user']))
	  {
		  $ussername=$_GET['user'];
	  }
	  
	  if($ussername!="" && $pasword!=""){
	  			$servername = "localhost";
$username = "root";
$password = "";
$database_name="turism";
	  //1.Crearea conexiunii
	  $conn= new mysqli($servername, $username, $password, $database_name);
	  //2.Verificarea conexiunii
	  if($conn->connect_error)
	  {
		  die("Connection failed: ".$conn->connect_error);
	  }
	  //3.Definirea interogarii
	  $script= "SELECT username,parola FROM persaoana WHERE username='$ussername' AND parola='$pasword' " ;
	  //4 Trimite interogarea $script la MySQL pentru a introduce valorile
	  if($conn->query($script))
	  {
	  	// salveaza username-ul si parola in sesiun
          echo "Autentificarea a fost efectuata cu succes.";
		session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        // afiseaza un mesaj de succes        
        
	  }
	  else
	  {
	    echo "Datele introduse sunt incorecte<br> Click <a href='index.html'>aici</a> pentru a reveni la pagina de login";
	  }
	 
	  //5.Inchiderea conexiunii
	  $conn->close();
	  }
	  ?>
      </form>
      
      
      
    </div>
</div>
<footer>
 
  <p><b>C&#259;runta Cristina: <a href="mailto:cristinacarunta@yahoo.com">cristinacarunta@yahoo.com</a>.</b></p>
</footer> 

 </body>
</html>
