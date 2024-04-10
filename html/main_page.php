<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    <?php 
        echo file_get_contents("../css/main_page_styles.css");
    ?>
    </style>
    <title>Musicly</title>
</head>
<body>
    <div class="main_page_block">
        <div class="main_page_title">
            <h1>Peshki</h1>
        </div>
        <div class="main_page_block_login_register">
            <form action="register.php" method="post">
                <div class="main_page_login_block">
                    <p>Login <input type="text" name = "login"></p>
                    <p>Password <input type="text" name = "password"></p>
                    <p>Repeat password <input type="text" name="repeatpassword"></p>
                    <button type="submit">Registration </button>
                </div>
            </form>
            <form action="login.php" method="post">
                <div class="main_page_register_block">
                    <p>Login <input type="text" name="login"></p>
                    <p>Password <input type="text" name="password"></p>
                    <a href="play_page.php"><button type="submit">Login </button></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>