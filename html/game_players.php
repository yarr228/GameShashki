<?php
session_start();

require_once('db.php');

$Firstplayer = $_POST['Firstplayer'];
$Secondplayer = $_POST['Secondplayer'];

if (empty($Firstplayer) || empty($Secondplayer))
{
    echo '<script>window.location.href = "play_page.php";</script>';
} 
else 
{

    $sql = "SELECT * FROM `users` WHERE login = '$Firstplayer'";
    $result = $conn ->query($sql);
    
    if ($result -> num_rows > 0) 
    {
        // echo "First user detected  "; // Переместите этот вывод или удалите его

        $sql = "SELECT * FROM `users` WHERE login = '$Secondplayer'";
        $result = $conn ->query($sql);
        if ($result -> num_rows > 0)
        {
            // Проверяем, была ли отправлена форма
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                // Получаем данные из формы
                $firstPlayer = $_POST['Firstplayer'];
                $secondPlayer = $_POST['Secondplayer'];

                // Сохраняем данные в сессии
                $_SESSION['firstPlayer'] = $firstPlayer;
                $_SESSION['secondPlayer'] = $secondPlayer;

                // Перенаправляем пользователя на следующую страницу
                header("Location: index.php");
                exit; // Важно прервать выполнение кода после перенаправления
            }
        } 
        else 
        {
        echo '<script>window.location.href = "play_page.php";</script>';
        }

    }
    else 
    {
        echo '<script>window.location.href = "play_page.php";</script>';
    }

}
?>