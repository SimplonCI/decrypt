<?php
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $dbname = 'truelove';


    // connection
    $db = mysqli_connect($servername,$username,$password,$dbname);

    if(!$db){
        die("Failed to connect database ".mysqli_connect_error());
    }
?>
