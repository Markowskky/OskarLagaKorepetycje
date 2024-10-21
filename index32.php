<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 

$con = mysqli_connect("localhost","root","","poniedzialek");
 if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " .mysqli_connect_error();
    exit();
    }else{
        echo "Connection ok";
    }
    if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['wiek'])){
    $addsql = "INSERT INTO users ( id, imie, nazwisko, wiek) VALUES (NULL, "" . $_POST['imie'] . "," . $_POST['nazwisko'] . "," . $_POST['wiek']
    "}

    if(mysqli_query($con_$addsql)){
        echo "RECORD ADDED";
    }else{
        echo "ADD ERROR";
    }


 
 ?>


</body>
</html>