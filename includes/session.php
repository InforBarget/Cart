<?php
    session_start();

    if (!isset($_SESSION['userId'])) {
        header('location:login.php');
    }
?>
