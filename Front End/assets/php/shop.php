<?php
include('./connection.php');


$city = "select city from location" ;

$run_Query = mysqli_query($conn, $city);

while ($row = mysqli_fetch_array($run_Query))
{
   $abcd = $row[0];
}
?>