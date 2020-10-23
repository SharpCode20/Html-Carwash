<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "finalproject";




$conn = mysqli_connect($hosst, $user, $password, $database)

if(!$conn){
    die("Connection error:  " . mysqli_connect_error());
}

else{
    echo "<p>Connection Successful</p>";
}



?>