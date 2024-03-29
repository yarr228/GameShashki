<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="script.js"></script>
    <style>
    <?php 
        echo file_get_contents("../css/play_page_styles.css");
    ?>
    </style>
</head>
<body>
    <header>
        <div class="header_container">
            <div class="results_header_container">
                <a href="results_page.php"><p class="results_header_name">My results</p></a>
            </div>
            <div class="toplist_header_container">
                <a href="toplist_page.php"><p class="results_header_name">Top List</p></a>
                
            </div>
            <div class="exit_header_container">
                <a href="main_page.php"><p class="results_header_name">Exit</p></a>
            </div>
        </div>
    </header>
    <div class="main_play_contaner">
        <div class="game_players">
            <form action="game_players.php" method="post">
                <div>
                    <p>First player <input type="text" name="Firstplayer"></p>
                    <p>Second player <input type="text" name="Secondplayer"></p>
                    <button type="submit">Play</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>