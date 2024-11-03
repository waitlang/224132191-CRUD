<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phonebook";

    //Create connection

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die ("Con fail". $conn->connect_error);
        
    }
?>
