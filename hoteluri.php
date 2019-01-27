<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Hoteluri</title>
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
 </head>

 <body>
  <div id ="container">
	<div id="top">
	  <h1 class="header">Hoteluri</h1>
	   <div id ="navbar">
			   <ul id = "navul">
				    <li><a href="restaurante.php">Restaurante</a></li>
				    <li><a href="hoteluri.php" class="selected">Hoteluri</a></li>
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
				        <a onmouseover="mopen('m1')" onmouseout="mclosetime()" >Contul meu</a>
				        <div id="m1"  onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				            <a href="login.php">Autentificare</a>
					        <a href="adauga_persoana.php">&#206;nregistrare utilizator</a>
				        </div>
				    </li>
		       </ul>
	       </div>
	</div>
	<div id="leftcontent">
    
     <form id="form1"  method="GET" action="#">
     <label for="textfield"><b>Alege loca&#355;ia :</b></label>
     <select name="oras" id="select" size="1">
     <option value="Timisoara"> Timisoara <option/>
     <option value="Resita"> Resita <option/>
     <option value="Anina"> Anina <option/>
	 </select>
	 <input type="submit" id="trimiteLocatie2" value="Trimite">  
        <br/>
      <br/>
	  
     
		   <?php
	  
	  $oras="";
	  if( isset($_GET['oras']))
	  {
		  $oras=$_GET['oras'];
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
	  $result=$conn->query("SELECT idoras FROM oras WHERE nume='$oras'"); //incrementeaza id
	  $row=$result->fetch_row();
	  $idoras=$row[0];
	  
	  $result=$conn->query("SELECT idhotel FROM orashotel WHERE idoras='$idoras'"); //incrementeaza id
	  $lengths = mysqli_num_rows($result);
	  $rows=$result->fetch_row();
	  echo "<table>";
	  while ( $rows =  $result->fetch_assoc() ) {
		  $idhotel=$rows['idhotel'];
		  $result2=$conn->query("SELECT * FROM hoteluri WHERE idhotel='$idhotel'");
		  $row2=$result2->fetch_row();
	      $stele=" ";
		  for($i=1;$i<=$row2[3];$i++)
	             $stele=$stele."*";
		  {
		  echo "<tr>
					<td><b> Hotel:</b></td> <td>$row2[2] </td><td>   $stele  </td>
				</tr>" ;
		  }
		  
	  }
	   echo "</table>";
	 /* $script= "INSERT INTO persaoana (`id`,`nume`,`prenume`,`varsta`,`parola`,`username`,`email`,`telefon`,`sex`)
	   VALUES ('$id','$nume','$prenume','$varsta','$parola','$ussername','$email','$telefon','$sex')" ;
	  //4 Trimite interogarea $script la MySQL pentru a introduce valorile
	  if($conn->query($script))
	  {
		  echo 'Datele au fost gasite';
	  }
	  else
	  {
	    echo 'Error:'.$conn->error;
	  }*/
	  //5.Inchiderea conexiunii
	  $conn->close();
	  ?>
     
     </form>
     
		
	</div>
	
  </div>
 </body>
</html>
