<?php
    // session start();
    if(!empty($_SESSION)){ }else{ session_start(); }

    // connect to database
    $conn = mysqli_connect("localhost", "username", "password", "database");

    // check connection
    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }

    //