<!DOCTYPE html>
<?php session_start();?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Up - Anasayfa</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="style.css">

</head>
<body  class="mainPageBody">
    <div class="menuMainBar">
    <img href="entryPage.php" class="HaberUpLogo" src="/images/HaberUpLogo.png" alt="HaberUpLogo">
        <a href="mainPage.php" class="HaberUpLogoLink"></a>

        <a href="addNew.php" class="addNew">Haber Ekle</a>
        <a href="editDelete.php" class="editDelete">Haber Düzenle / Sil</a>
        <a href="entryPage.php" class="signOut">Çıkış Yap</a>
    </div>

    <div class="main"></div>
    <!-- yaz kodunu buraya -->

    <div class="container-addNew" >
        <form method="post">
            <h1 style="margin-left:300px;" class="Header-addNew">Haber</h1>
            <label>Haber Başlığı:</label>
            <input style='width: 450px; border:1px solid gray;' type="text" class="formControl" name="h_baslik">
            <br>
            <label class="NewSpace">Haber:</label>
            <textarea type="text" style="margin-left:28px;border: 1px solid gray;" class="addNewTextArea" name="haber"></textarea>
            <br>
            <label class="NewSpace">Fotoğraf Url:</label>
            <input type="text" style="width: 450px; margin-left:-25px;border: 1px solid gray;" class="formControl2" name="image">
            <br>
            <button style="margin-left:250px;" type="submit" name="btn" class="btn btn-primary">Kaydet</button>
        </form>
    </div>

    <?php
        include("connectDatabase.php");

        if (isset($_POST["btn"])) {
            $h_baslik = $_POST["h_baslik"];
            $haber = $_POST["haber"];
            $image = $_POST["image"];
            $topTick = 1;
            $command = $connetion->prepare("INSERT into haberbilgileri set haber_baslik=?,haber=?,image=?, topTick=?");
            $insert = $command->execute(array($h_baslik, $haber, $image,$topTick));
            if ($insert) { 
                echo("<h1>İşlem Başarılı</h1>");
                header('Location: editDelete.php');
            }
            else{
                echo "<h1>İşlemde Hata Var</h1>";
            }
        }

    ?>
    



    
    
    

</body>
</html>