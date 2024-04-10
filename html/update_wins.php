<?php


require_once('db.php');


// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Обновление счетчика побед победителя
$sql = "UPDATE `users` SET score = score + 5 WHERE login = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $winner);
$stmt->execute();
$stmt->close();
?>