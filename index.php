<?php

$mysqli = new mysqli('localhost', 'root', '', 'hotel');

  if (!mysqli_connect_errno()){
      
    $sql= "SELECT imie FROM hotel WHERE id = '1'";
    
    if( $result = $mysqli->query($sql) ){

      if( $data = mysqli_fetch_array($result) ){
        echo count($data);
      }
      else echo 'niedostepny';
      
    }
    
  }
  else echo 'Bład polaczneie'; 


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body> 
<div class="popup">
        Panel z rezerwacją w trakcie remontu :)
    </div> 
    <main>
    
    <div class="container">
    <h1>Hotel Transylwania</h1>
    <nav><ul>
        <li><a href="http://" target="_blank" rel="noopener noreferrer">Galeria</a></li>
        <li><a href="http://" target="_blank" rel="noopener noreferrer">Kontakt</a></li>
    </ul></nav>
    </div>
        <div></div>
        <div class="room" id="rOne"><a href="areaone.php">dfdf</a></div>
        <div class="room" id="rTwo"></div>
        <div class="room" id="rThree"></div>
        <div class="room" id="rFour"></div>
    </main>
    <script src="./js/index.js"></script>
</body>
</html>