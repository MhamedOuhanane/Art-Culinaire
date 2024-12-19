<?php
    $con = mysqli_connect("localhost", "root", "", "artculinaire");
    
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    };
?>