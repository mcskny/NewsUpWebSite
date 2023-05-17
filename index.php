<?php 
    session_start();
    $_SESSION["errmsg"]=false;
    header("Location: admin-interface/entryPage.php");
?>