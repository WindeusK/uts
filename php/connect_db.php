<?php

    //Declare necessary variable for connecting to server & DB
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "perpustakaan";

    //Make new connection module
    $conn = new mysqli($server, $username, $password); //For connecting to SERVER
    $conn_db = new mysqli($server, $username, $password, $db); //For connnecting to DATABASE

    $create_db = "CREATE DATABASE IF NOT EXISTS perpustakaan";
    
    //Check connection first
    if ($conn->error) {
        die($conn->errno ." Error connecting to server: " . $conn->error);  //Sends error message if needed   
    } 

    //Create Database if not already existing
    if ($conn->query($create_db) === true) {
        //Database successfully created
    } else echo "Error creating database: " . $conn->error;

    //Connect to DB
    if ($conn_db->error) {
        echo "Error: " . $conn->error;
    } else {
        //Connect DB success
    }
?>