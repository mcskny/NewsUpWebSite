<?php 
    try {
        $connetion = new PDO("mysql:host=localhost;dbname=news", "root", "");
    }
    catch(\Throwable $th){
        echo "Bağlanmadı hata : " . $th; 
    }
?>