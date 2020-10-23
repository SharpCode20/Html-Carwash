<?php
    include 'db.php';

    $name = $_POST['name']

    $id = $_POST['id']

    $password = $_POST['password']

    $phone = $_POST['phone']



    echo "<p>Welcome " . $name . "</p>";
    echo "<p>The ID you used is  " . $id . "</p>";

    $sql ="insert into users(name, id, password, phone) values(\"$name\", \"$id\", \"$password\", \"$phone\" )"

    if(mysqli_query($conn, $sql)){
        echo "<p> Record inserted</p>";
    }
    else{
        echo "<p>Error happened: " . mysqli_error($conn) . "</p>";
    }

?>