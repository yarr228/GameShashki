<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    <?php 
        echo file_get_contents("../css/register_styles.css");
    ?>
    </style>
</head>
<body>
    <div>
        <h1>
        <?php
        require_once('db.php');

        $login = $_POST['login'];
        $password = $_POST['password'];
        $repeatpassword =  $_POST['repeatpassword'];

        if (empty($login) || empty($password) || empty($repeatpassword))
        {
            echo '<script>window.location.href = "main_page.php";</script>';
        } else
        {
            if ($password != $repeatpassword)
            {
                echo '<script>window.location.href = "main_page.php";</script>';
            } else
            {
                $sql = "INSERT INTO `users` (login, pass) VALUES ('$login', '$password')";
                if ($conn -> query($sql) === TRUE);
                {
                    echo '<script>window.location.href = "play_page.php";</script>';
                }
            }
        }
        ?>
        </h1>
    </div>
</body>
</html>