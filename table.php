<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Registration";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
       die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
     echo "Connection was successful";
}

$sql = "CREATE TABLE `User Details`( `First Name` text(20) NOT NULL ,`Last Name` text(20) NOT NULL , `Age` INT(3) NOT NULL , `Qualification` varchar(30) NOT NULL , `Course Opted` VARCHAR(25) NOT NULL , `Phone Number` varchar(14) NOT NULL , `Email` varchar(30) NOT NULL , `Gender` text(6) NOT NULL )";

$result= mysqli_query($conn, $sql);

if($result){
      echo "the table was created successfully!<br>";
}
else{
      echo "the table was not created successfully!<br>";
      mysqli_error($conn);
}
?>


