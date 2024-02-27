<?php

$nrKaretki = $_POST['nrKaretki'];
$ratownik1 = $_POST['ratownik1'];
$ratownik2 = $_POST['ratownik2'];
$ratownik3 = $_POST['ratownik3'];


$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "ee09");
// echo mysqli_error($connect);

    $query = "INSERT INTO ratownicy (id, nrKaretki, ratownik1, ratownik2, ratownik3) VALUES (NULL, '$nrKaretki', '$ratownik1', '$ratownik2', '$ratownik3')";
    // $result = mysqli_query($connect, $query);
    if(mysqli_query($connect, $query)){
        echo "Do bazy zostało wysłane zapytanie: ".$query;
    }else{
        echo"no";
    }


mysqli_close($connect);

?>