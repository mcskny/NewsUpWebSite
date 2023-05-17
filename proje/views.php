<?php
    

    include("connectDatabase.php");

    $id = @$_GET['id'];
    $query = $connetion->prepare("UPDATE haberbilgileri SET topTick = topTick + 1 WHERE id = ?");
    $query->execute(array($id));
    header("location:id.php?id=".$id);
?>