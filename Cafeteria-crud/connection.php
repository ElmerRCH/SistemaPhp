<?php
    $servername = "localhost"; 
    $username = "tu usuario:)"; 
    $password = "tu contra :)";
    $dbname = "cafeteria";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $conn->set_charset("utf8") ;
?>