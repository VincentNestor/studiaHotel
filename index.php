<?php
$mysqli = new mysqli('localhost', 'root', '', 'hotel');

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
        <div class="room" id="rOne"><a href="areaone.php">
    <?php
$countOne = 0;


  if (!mysqli_connect_errno()){
      
    $sqlOne= "SELECT imie FROM hotel WHERE id = '1'";

    
    if( $result = $mysqli->query($sqlOne) ){

      if( $data = mysqli_fetch_array($result) ){
        while($data = mysqli_fetch_array($result)){
         ++$countOne;
         }
         echo $countOne + 1;
         echo '</br>';
      }
      else echo 'Nie ma gości';
      
    }
    
  }
  else echo 'Bład połączenia'; 


?>
</a></div>
        <div class="room" id="rTwo"><a href="areatwo.php">


        <?php


  if (!mysqli_connect_errno()){
      
    $sqlTwo= "SELECT imie FROM hotel WHERE id = '2'";

    
    if( $resultTwo = $mysqli->query($sqlTwo) ){

      if( $dataTwo = mysqli_fetch_array($resultTwo) ){
        while($dataTwo = mysqli_fetch_array($resultTwo)){
         ++$countTwo;
         }
         echo $countTwo + 1;
         echo '</br>';
         
         $mysqli->close();
      }
      else echo 'Nie ma gości';
      
    }
    
  }
  else echo 'Bład połączenia'; 


?>



        </a>
        
      
      </div>
        <div class="room" id="rThree"><a href="areathree.php">
        <?php


  if (!mysqli_connect_errno()){
      
    $sqlThree= "SELECT imie FROM hotel WHERE id = '3'";

    
    if( $resultThree = $mysqli->query($sqlThree) ){

      if( $dataThree = mysqli_fetch_array($resultThree) ){
        while($dataThree = mysqli_fetch_array($resultThree)){
         ++$countThree;
         }
         echo $countThree + 1;
         echo '</br>';
      }
      else echo 'Nie ma gości';
      
    }
    
  }
  else echo 'Bład połączenia'; 


?>

        </a></div>
        <div class="room" id="rFour"><a href="areafour.php">

        <?php



  if (!mysqli_connect_errno()){
      
    $sqlFour= "SELECT imie FROM hotel WHERE id = '4'";

    
    if( $resultFour = $mysqli->query($sqlFour) ){

      if( $dataFour = mysqli_fetch_array($resultFour) ){
        while($dataFour = mysqli_fetch_array($resultFour)){
         ++$countFour;
         }
         echo $countFour + 1;
         echo '</br>';
      }
      else echo 'Nie ma gości';
      
    }
    
  }
  else echo 'Bład połączenia'; 


?>

        </a></div>
    </main>
    <script src="./js/index.js"></script>
</body>
</html>