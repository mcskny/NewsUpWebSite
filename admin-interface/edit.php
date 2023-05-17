<?php
include("connectDatabase.php");
ob_start();
$id= @$_GET["id"];
$haber_baslik= @$_GET["haber_bilgileri"];
$haber= @$_GET["haber"];
$image= @$_GET["image"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Haber Up - Anasayfa</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body style="background-color: #F5F5FA;" class="mainPageBody">
    <div class="menuMainBar">
    <img href="entryPage.php" class="HaberUpLogo" src="/images/HaberUpLogo.png" alt="HaberUpLogo">
        <a href="mainPage.php" class="HaberUpLogoLink"></a>

        <a href="addNew.php" class="addNew">Haber Ekle</a>
        <a href="editDelete.php" class="editDelete">Haber Düzenle / Sil</a>
        <a href="entryPage.php" class="signOut">Çıkış Yap</a>
    </div>

    <div class="main"></div>

    <div class="editforum">
        <form id="goform" method='POST'>
            <?php
                include("connectDatabase.php");
                $degisken =  @$_GET["id"];
                $verileriCek = $connetion->prepare("select * from haberbilgileri WHERE id=?");
                $verileriCek->execute(array($degisken));
                
                while($b = $verileriCek->fetch(PDO::FETCH_ASSOC))
                {

                    echo "<input required='required' name='hb'  class = 'innut' style='width: 500px; margin:0;' type='text' value='".$b["haber_baslik"]."'>";
                    echo "<textarea required='required' name='h' class = 'ipnut' type='text' rows='10'>".$b["haber"]."</textarea>";
                    echo "<input required='required' name='zaman' class = 'innut' style='width: 500px; margin:0;' type='text' value='".$b["eklenme_tarihi"]."'>";
                    echo "<textarea required='required' name='link' class = 'ipnut' type='text' rows='3'>".$b["image"]."</textarea>";
                }
            ?>
            <button class="btnstyle" type="submit" name='btnUpdate'>Güncelle</button>
        </form>
        <?php
            if (isset($_POST["btnUpdate"])) {
                
                $haberb = trim($_POST['hb']);
                $haber = trim($_POST['h']);

                $zaman = trim($_POST['zaman']);
                $img = trim($_POST['link']);

                $query = $connetion->prepare("UPDATE haberbilgileri SET haber_baslik=?, 
                    haber=?, eklenme_tarihi=?, image=? WHERE id=?");
                $query->execute(array($haberb,$haber,$zaman,$img, $degisken));
                
                header("location:editDelete.php");

            }

        ?>
    </div>
</body>
</html>