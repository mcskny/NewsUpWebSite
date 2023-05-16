<!DOCTYPE html>
<?php session_start();
    include("connectDatabase.php");
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
    <table class="table table-striped" border="1" >
        
        <?php
            $query = $connetion->prepare("SELECT * FROM haberbilgileri");
            $query->execute();
            while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='newMainDiv'>
                        <img src=".$user["image"]." class='imageNew'/> 
                        <div class='haberBaslik'>".$user['haber_baslik']."</div>
                        <div class='haber'>".substr($user['haber'],0,90)."</div>
                        <div class='tarih'>".str_replace("-", " . ",substr($user['eklenme_tarihi'], 0, 10))."</div>
                    </div>";
            }
        ?>
        
    </table>
    



    
    
    

</body>
</html>