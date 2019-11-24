
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area Hotel</title>
    <link rel="stylesheet" href="./css/order.css">
</head>
<body>
    <main>
        <aside>

        <form action="areatwo.php" method="post">
            <input type="text" name="imie"  placeholder="Imię" id="">
            
            <input type="text" name="nazwisko" placeholder="Nazwisko" id="">
            <input type="number" name="dni" placeholder="Ilość dni" id=""> 
            <input type="submit" value="Rezerwuj" name='sub'>
        </form>

        </aside>
    </main>


    <?php 
  $mysqli = new mysqli('localhost', 'root', '', 'hotel');
 
 
  if( !mysqli_connect_errno() ){
    if( isset($_POST['sub']) )
    {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $dni = $_POST['dni'];
    

        echo $imie;
        echo $nazwisko;
        echo $dni;

        $sql = "INSERT INTO hotel (id, imie, nazwisko, dni) VALUES ('2', '$imie', '$nazwisko', '$dni')";

        if( $mysqli->query($sql) ){
           echo "";

        $mysqli->close();
        }else
        {
            echo '';
        }
    }

}
else
{
    echo 'Nie udało się połączyć z bazą danych';
}

    
 
  ?>
</body>
</html>