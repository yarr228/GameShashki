<?php

$servername = "localhost";
$username = 'root';
$password = '';
$dbname = 'shashki';

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed". mysqli_connect_error());
}
else {
    
}