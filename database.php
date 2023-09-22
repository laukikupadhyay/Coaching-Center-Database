<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

//create a db
$sql = "Create database Registration";
mysqli_query($conn, $sql);

if (!$conn){
       die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
     echo "Connection was successful";
}

?>

