<?php
    $server = 'localhost';
    $db_name = 'tb_perpus';
    $pw = '';
    $username = 'root';

    $conn = new mysqli($server, $username, $password);

    if ($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
    }
?>