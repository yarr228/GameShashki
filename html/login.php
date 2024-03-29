<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    <?php 
        echo file_get_contents("../css/login_styles.css");
    ?>
    </style>
</head>

<?php

require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['password'];

if (empty($login) || empty($pass))
{
    echo '<script>window.location.href = "main_page.php";</script>';
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn ->query($sql);  

    if ($result -> num_rows > 0) {
        
        echo '<script>window.location.href = "play_page.php";</script>';
    } else {
        echo '<script>window.location.href = "main_page.php";</script>';
    }
}