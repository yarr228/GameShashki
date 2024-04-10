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
    require_once('db.php');

    // Выполнение запроса на обновление score для первого игрока
    $sqlFirstPlayer = "UPDATE `users` SET score = score + 5 WHERE login = '$firstPlayer'";
    $sqlWinsFirstPlayer = "UPDATE `users` SET wins = wins + 1 WHERE login = '$firstPlayer'";
    if ($conn->query($sqlFirstPlayer) === TRUE) {

        if ($conn->query($sqlWinsFirstPlayer) === TRUE) {

            echo '<script>window.location.href = "toplist_page.php";</script>';
    
        } else {
            echo "Error updating score for $firstPlayer: " . $conn->error;
        }
        echo '<script>window.location.href = "toplist_page.php";</script>';

    } else {
        echo "Error updating score for $firstPlayer: " . $conn->error;
    }

?>