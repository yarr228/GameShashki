<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    <?php 
        echo file_get_contents("../css/toplist_page_styles.css");
    ?>
    </style>
</head>
<body>
    
    <div class="top_list_container">
        <table>
            <tr>
                <th>Name</th>
                <th>Score</th>
            </tr>
            <tr>
                <th>   
                    <?php

                    require_once('db.php');

                    $sql = "SELECT * FROM `users` ORDER BY score DESC";
                    $result = $conn ->query($sql);  

                            while ($r = mysqli_fetch_assoc($result))
                            {
                                echo "{$r['login']}<br/>";
                            }

                    ?>
                </th>
                <th>
                <?php
                $sql = "SELECT * FROM `users` ORDER BY score DESC";
                    $result = $conn ->query($sql);  

                            while ($r = mysqli_fetch_assoc($result))
                            {
                                echo "{$r['score']}<br/>";
                            }

                    ?>
                </th>
            </tr>
        </table>
    </div>
    <div class="button_toplist_container">
        <button><a href="../html/play_page.php">Go to play page</a></button>
    </div>
</body>
</html>