<?php
    session_start();
    unset($_SESSION['STID']);
    unset($_SESSION['password_id']);
    header('Location:login.html');
?>