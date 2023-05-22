<?php
    

    include("connectDatabase.php");

    $id = @$_GET['id'];

    $query = $connetion->prepare("UPDATE haberbilgileri SET topTick = topTick + 1 WHERE id = ?");
    $query->execute(array($id));

    $asd = $connetion->prepare("SELECT * from haberbilgileri where id=?");
    $asd->execute(array($id));
    
    while ($bi = $asd->fetch(PDO::FETCH_ASSOC)) {
       header("Location:".$bi["haber"]."");
    }
    // header("location:id.php?id=".$id);
    
    // 
?>