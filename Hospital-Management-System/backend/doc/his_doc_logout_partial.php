<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['docno']);
    session_destroy();

    header("Location: his_doc_logout.php");
    exit;
?>
