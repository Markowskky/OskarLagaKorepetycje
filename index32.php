<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 

$con = mysqli_connect("localhost", "root", "", "poniedzialek");
 if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
   exit();
} else {
    echo "Connection ok<br>";
    $addsql = "INSERT INTO users ( id, imie, nazwisko, wiek) VALUES (NULL, 'Szymon', 'Sprzedawczyk' , 60)";
 mysqli_query($con,$addsql);
}
if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['wiek'])){
    //$addsql = "INSERT INTO users ( id, imie, nazwisko, wiek) VALUES (NULL, '" . $_POST['imie'] . "', '" . $_POST['nazwisko'] . "', '". $_POST['wiek']. ")";
  }

    echo "<prep>";
    print_r($_POST);
    echo "</prep>";
  
        $sql = "SELECT * FROM users";
        $result = mysqli_query($con,$sql);

        echo'<table border="1">';
        while($row = mysqli_fetch_assoc($result)){
            //mysqli_fetch_row
            //mysqli_fetch_array
            //mysqli_fetch_assoc
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['imie'] . "</td>";
            echo "<td>" . $row['nazwisko'] . "</td>";
            echo "<td>" . $row['wiek'] . "</td>";
            echo "</tr>";
        }
            echo "</table>"
        
    ?>
</body>
</html>