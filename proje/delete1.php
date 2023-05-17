<?php
include("connectDatabase.php");

$id= @$_GET["id"];

$query = $connetion->prepare("DELETE FROM haberbilgileri WHERE id=?");
$query->execute(array($id));

header("location:mainPage.php");

?>