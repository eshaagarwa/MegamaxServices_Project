<?php
$user = "maxdefault";
$server = "localhost";
$pass = "_826S38$6MOhf1yM";
$db = "maxdefault_1234";

    // Create a connection to the database
    $conn_max = mysqli_connect($server, $user, $pass, $db);

    // Check the connection
    if (!$conn_max) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";


?>
