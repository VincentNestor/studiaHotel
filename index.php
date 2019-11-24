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
        <div class="room" id="rOne"><a href="areaone.php">Rezerwuj</a>
      </div>
        <div class="room" id="rTwo"><a href="areatwo.php">Rezerwuj </a>
      </div>
        <div class="room" id="rThree"><a href="areathree.php">Rezerwuj</a></div>
        <div class="room" id="rFour"><a href="areafour.php">Rezerwuj</a></div>
    </main>
    <script src="./js/index.js"></script>
</body>
</html>