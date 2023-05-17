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
    <link rel="stylesheet" href="style2.css">
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

    <table border="1" >
        <tr>
            <th class="once">Id</th>
            <th>Haber Başlık</th>
            <th>Haber</th>
            <th></th>
            <th class="second"> </th>
            
        </tr>
        <?php
            $query = $connetion->prepare("SELECT * FROM haberbilgileri");
            $query->execute();
            while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                        <td class='mami'>".$user['id']."</td>
                        <td>".$user['haber_baslik']."</td>
                        <td>".substr($user['haber'],0,80)."</td>
                        <td><a class='dell' href='delete.php?id=".$user["id"]."'>Sil</a></td>
                        <td><a class='editt' href='edit.php?id=".$user["id"]."'>Düzenle</a></td>

                        ";
            }
        ?>
        

        </tr>
        
        
        
    </table>
    <div class="endd"></div>
</body>

</html>

