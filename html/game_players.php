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
        // echo "First user detected  "; // ��६���� ��� �뢮� ��� 㤠��� ���

        $sql = "SELECT * FROM `users` WHERE login = '$Secondplayer'";
        $result = $conn ->query($sql);
        if ($result -> num_rows > 0)
        {
            // �஢��塞, �뫠 �� ��ࠢ���� �ଠ
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                // ����砥� ����� �� ���
                $firstPlayer = $_POST['Firstplayer'];
                $secondPlayer = $_POST['Secondplayer'];

                // ���࠭塞 ����� � ��ᨨ
                $_SESSION['firstPlayer'] = $firstPlayer;
                $_SESSION['secondPlayer'] = $secondPlayer;

                // ��७��ࠢ�塞 ���짮��⥫� �� ᫥������ ��࠭���
                header("Location: index.php");
                exit; // ����� ��ࢠ�� �믮������ ���� ��᫥ ��७��ࠢ�����
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