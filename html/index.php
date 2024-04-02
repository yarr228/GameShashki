<?php
session_start();

// Проверяем, есть ли сохраненные данные в сессии
if(isset($_SESSION['firstPlayer']) && isset($_SESSION['secondPlayer'])) {
    // Извлекаем данные из сессии
    $firstPlayer = $_SESSION['firstPlayer'];
    $secondPlayer = $_SESSION['secondPlayer'];
} else {
    // Если данных в сессии нет, перенаправляем пользователя на другую страницу или выводим сообщение об ошибке
    header("Location: game_players.php");
    exit;
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Game</title>
</head>
<body>
    <main>
    <div class = "info_buttons">
        <div class="players_information">
    
            <h1>Player Information</h1>
                <p class="results_header_name">First player: <?php echo $firstPlayer; ?></p>
                <p class="results_header_name">Second player: <?php echo $secondPlayer; ?></p>
                <p class="results_header_name">
                    <?php
                        require_once('db.php');

                        // Запрос данных из базы данных только для первого и второго игрока
                        $sql = "SELECT * FROM `users` WHERE login = '$firstPlayer' OR login = '$secondPlayer' ORDER BY score ASC";
                        $result = $conn ->query($sql);  
                        while ($r = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td> {$r['login']} = </td>";
                            echo "<td>{$r['score']}</td>";  
                            echo "</tr>";
                        }
                    ?>
                </p>
        </div>
        <div class="buttons">
            <form action="winFirstButton.php">
                <button class="winFirst" type="submit">WinFirst</button>
            </form>
                <form action="winSecButton.php">
                    <button class="winFirst" type="submit">WinSecond</button>
                </form>
            <form action="play_page.php">
                <button class="winFirst" type="submit">nothing</button>
            </form>
        </div>
    </div>
        <div class="red-turn-text mobile">
            Reds turn
        </div>
        <table>
            <tr>
                <td class="noPieceHere"></td>
                <td><p class="red-piece" id="0"></p></td>
                <td class="noPieceHere"></td>
                <td><p class="red-piece" id="1"></p></td>
                <td class="noPieceHere"></td>
                <td><p class="red-piece" id="2"></p></td>
                <td class="noPieceHere"></td>
                <td><p class="red-piece" id="3"></p></td>
            </tr>
            <tr>
                <td><p class="red-piece" id="4"></p></td>
                <td class="noPieceHere"></td>
                <td><p class="red-piece" id="5"></p></td>
                <td class="noPieceHere"></td>
                <td><p class="red-piece" id="6"></p></td>
                <td class="noPieceHere"></td>
                <td><p class="red-piece" id="7"></p></td>
                <td class="noPieceHere"></td>
            </tr>
            <tr>
                <td class="noPieceHere"></td>
                <td><p class="red-piece" id="8"></p></td>
                <td class="noPieceHere"></td>
                <td><p class="red-piece" id="9"></p></td>
                <td class="noPieceHere"></td>
                <td><p class="red-piece" id="10"></p></td>
                <td class="noPieceHere"></td>
                <td><p class="red-piece" id="11"></p></td>
            </tr>
            <tr>
                <td></td>
                <td class="noPieceHere"></td>
                <td></td>
                <td class="noPieceHere"></td>
                <td></td>
                <td class="noPieceHere"></td>
                <td></td>
                <td class="noPieceHere"></td>
            </tr>
            <tr>
                <td class="noPieceHere"></td>
                <td></td>
                <td class="noPieceHere"></td>
                <td></td>
                <td class="noPieceHere"></td>
                <td></td>
                <td class="noPieceHere"></td>
                <td></td>
            </tr>
            <tr>
                <td><span class="black-piece" id="12"></span></td>
                <td class="noPieceHere"></td>
                <td><span class="black-piece" id="13"></span></td>
                <td class="noPieceHere"></td>
                <td><span class="black-piece" id="14"></span></td>
                <td class="noPieceHere"></td>
                <td><span class="black-piece" id="15"></span></td>
                <td class="noPieceHere"></td>
            </tr>
            <tr>
                <td class="noPieceHere"></td>
                <td><span class="black-piece" id="16"></span></td>
                <td class="noPieceHere"></td>
                <td><span class="black-piece" id="17"></span></td>
                <td class="noPieceHere"></td>
                <td><span class="black-piece" id="18"></span></td>
                <td class="noPieceHere"></td>
                <td><span class="black-piece" id="19"></span></td>
            </tr>
            <tr>
                <td><span class="black-piece" id="20"></span></td>
                <td class="noPieceHere"></td>
                <td><span class="black-piece" id="21"></span></td>
                <td class="noPieceHere">
                <td><span class="black-piece" id="22"></span></td>
                <td class="noPieceHere"></td>
                <td><span class="black-piece" id="23"></span></td>
                <td class="noPieceHere"></td>
            </tr>
        </table>
        <div class="desktop">
            <div class="red-turn-text">
                Reds turn
            </div>
            <p id="divider">|</p>
            <div class="black-turn-text">
                Blacks turn
            </div>
        </div>
        <div class="black-turn-text mobile">
            Blacks turn
        </div>
    </main>

    <script src="script.js" defer></script>
</body>
</html>