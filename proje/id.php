<!DOCTYPE html>
<?php
include("connectDatabase.php");

$id= @$_GET["id"];
$haber_baslik= @$_GET["haber_bilgileri"];
$haber= @$_GET["haber"];
$image= @$_GET["image"];
$topTick= @$_GET["topTick"];
?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Up - Anasayfa</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #F5F5FA;" class="mainPageBody">
    <div class="menuMainBar">
    <img href="entryPage.php" class="HaberUpLogo" src="/images/HaberUpLogo.png" alt="HaberUpLogo">
        <a href="mainPage.php" class="HaberUpLogoLink"></a>

        <a href="addNew.php" class="addNew">Haber Ekle</a>
        <a href="editDelete.php" class="editDelete">Haber Düzenle / Sil</a>
        <a href="entryPage.php" class="signOut">Çıkış Yap</a>
    </div>

    <div class="main"></div>
    <!-- yaz kodunu buraya -->
<form id="goform" method='POST'>
            <?php
                include("connectDatabase.php");
                $degisken =  @$_GET["id"];
                $verileriCek = $connetion->prepare("select * from haberbilgileri WHERE id=?");
                $verileriCek->execute(array($degisken));
                
                
                while($b = $verileriCek->fetch(PDO::FETCH_ASSOC))
                {

                    echo "<img style='border-radius:20px;' src='".$b["image"]."'>";
                    echo "<div style='font-size:34px;font-weight:700;margin-top:40px;'>".nl2br($b["haber_baslik"])."</div>";
                    echo "<div style='font-size:24px;margin-left:20px;margin-right:500px;margin-top:50px;'>".$b["haber"]."</div>";
                    
                }
            ?>
        </form>

        </body>
</html>