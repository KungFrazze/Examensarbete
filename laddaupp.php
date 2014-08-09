<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
     
     <title>Din Mat</title>
     <!--  zmiana sciezki na dinmat -->
    <link href="./styles/dinmat.css" type="text/css" rel="stylesheet">

  </head>
  
  <body>
    <div id="container">
      <header>
        
        <h1> <img class ="loga" src="./images/gour.png"> Din Mat</h1>
        
      </header>
      
      <nav id = "meny">
        <ul>
        <!-- zmaian jej kodu na nasz-->
          <li><a href="./index.php">Startsida</a></li>
          <li><a href="./laddaupp.php">Ladda upp</a></li>
          <li><a href="./om_oss.html">Om oss</a></li>
          <li><a href="./kontakt.html">Kontakt</a></li>
        </ul>
      </nav>  
        
      <section>
        <h1>Ladda Upp</h1>
        

<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<input type="file" name="file" id="file" value="Bläddra"/><br>

</form>
<br>

<form id="add_descr" method="get" action="laddaupp.php">
<fieldset>
<Legend>Kryssa i en av varje kategori</Legend>
<div class="CheckOne">
  Måltid<br>
    <input type="radio" name="Maltidid" id="Frukost" value="1"/>
    <label for="CheckOne">Frukost</label><br>

    <input type="radio" name="Maltidid" id="Lunch" value="2"/>
    <label for="CheckOne">Lunch</label><br>

    <input type="radio" name="Maltidid" id="Middag" value="3"/>
    <label for="CheckOne">Middag</label><br>

    <input type="radio" name="Maltidid" id="Mellanmal" value="4"/>
    <label for="CheckOne">Mellanmål</label><br>

    <input type="radio" name="Maltidid" id="Dessert" value="5"/>
    <label for="CheckOne">Dessert</label><br>
    
</div>

<div class="CheckTwo">
  Ursprung<br>
    <input type="radio" name="Ursprungid" id="Afrika" value="1"/>
    <label for="CheckTwo">Afrika</label><br>
  
    <input type="radio" name="Ursprungid" id="Asien" value="2"/>
    <label for="CheckTwo">Asien</label><br>
  
    <input type="radio" name="Ursprungid" id="Europa" value="3"/>
    <label for="CheckTwo">Europa</label><br>
    
    <input type="radio" name="Ursprungid" id="Nordamerika" value="4"/>
    <label for="CheckTwo">Nordamerika</label><br>
    
    <input type="radio" name="Ursprungid" id="Sydamerika" value="5"/>
    <label for="CheckTwo">Sydamerika</label><br>
</div>
    
  <div class="CheckThree">
  Tid<br>
    <input type="radio" name="Tidid" id="15" value="1"/>
    <label for="CheckThree">15 min</label><br>
    
    <input type="radio" name="Tidid" id="30" value="2"/>
    <label for="CheckThree">30 min</label><br>
    
    <input type="radio" name="Tidid" id="60" value="3"/>
    <label for="CheckThree">60 min</label><br>
    
    <input type="radio" name="Tidid" id="120" value="4"/>
    <label for="CheckThree">120 min</label><br>
    
    <input type="radio" name="Tidid" id="120+" value="5"/>
    <label for="CheckThree">120+ min</label><br><br>

    
  </div>
  
  <textarea name="descr_namn" rows="10" cols="50">
    Här kan man skriva text...
</textarea>

  

  
</fieldset>
<br>
<input type="submit" name="todo" value="Ladda Upp" />

</form>

<?php
if (isset($_GET['todo']))
{
  $maltidid = $_GET['Maltidid'];
  $ursprungid= $_GET['Ursprungid'];
  $tidid= $_GET['Tidid'];
  $desc = $_GET['descr_namn'];
  
  $dbhost = 'localhost';
  $dbuser = 'M11p0753';
  $dbpass = 'AmLeeCP16';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  if(! $conn )
  {
    die('Could not connect: ' . mysql_error());
  }
  $sql = "INSERT INTO recept (maltidid, ursprungid, tidid, beskriv) VALUES ($maltidid,$ursprungid,$tidid,'$desc')";
  mysql_select_db('m11p0753');
  $retval = mysql_query( $sql, $conn );
  if(! $retval )
  {
    die('Could not execute command: ' . mysql_error());
  }
  echo 'Ditt recept är nu uppladdat!';
  
  
  mysql_close($conn);
  

}
?>

      </section>
      

        
        
          <footer>
            <p>© Copyright 2014 by Din Mat</p>
          </footer>
        
        
    </div>
  </body>

</html>  
    
