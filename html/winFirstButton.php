<?php
    session_start();

    // �஢��塞, ���� �� ��࠭���� ����� � ��ᨨ
    if(isset($_SESSION['firstPlayer']) && isset($_SESSION['secondPlayer'])) {
        // ��������� ����� �� ��ᨨ
        $firstPlayer = $_SESSION['firstPlayer'];
        $secondPlayer = $_SESSION['secondPlayer'];
    } else {
        // �᫨ ������ � ��ᨨ ���, ��७��ࠢ�塞 ���짮��⥫� �� ����� ��࠭��� ��� �뢮��� ᮮ�饭�� �� �訡��
        header("Location: game_players.php");
        exit;
    }
    require_once('db.php');

    // �믮������ ����� �� ���������� score ��� ��ࢮ�� ��ப�
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