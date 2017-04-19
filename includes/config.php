<?php


//Datos de acceso local
$serverhost = "localhost";
$username = "root";
$password = "";
$dbname = "prau";



/* Datos de acceso remotos

$serverhost = "localhost";
$username = "root";
$password = "3spartaco";
$dbname = "inaem43";
*/

// Create connection
$conn = mysqli_connect($serverhost, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

