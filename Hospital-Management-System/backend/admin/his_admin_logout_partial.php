<?php
    session_start();
    unset($_SESSION['id']);
    session_destroy();

    header("Location: his_admin_logout.php");
    exit;
?>