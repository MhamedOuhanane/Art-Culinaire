<?php
    $connexion = mysqli_connect("localhost", "root", "", "artculinaire");
    
    if (!$connexion) {
        die("Connection failed: " . mysqli_connect_error());
    };
?>