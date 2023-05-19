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
    <div style='z-index:2;'  class="menuMainBar">
    <img href="entryPage.php" class="HaberUpLogo" src="/images/HaberUpLogo.png" alt="HaberUpLogo">
        <a href="mainPage.php" class="HaberUpLogoLink"></a>

        <a href="addNew.php" class="addNew">Add News</a>
        <a href="editDelete.php" class="editDelete">Edit/Delete News</a>
        <a href="entryPage.php" class="signOut">Sign Out</a>
    </div>

    <div class="main"></div>
    <!-- yaz kodunu buraya -->
    <table style='z-index:1;' class="table table-striped" border="1" >
        
        <?php
            $query = $connetion->prepare("SELECT * FROM haberbilgileri order by topTick desc");
            $query->execute();
            while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<div  class='newMainDiv' style='position: relative;'>
                        <a href='views.php?id=".$user["id"]."'> <img src='".$user["image"]."' class='imageNew'/></a>
                        
                        <a href='views.php?id=".$user["id"]."' class='haberBaslik'>".$user['haber_baslik']."</a>
                        <div class='haber'>".substr($user['haber'],0,80)."</div>
                        <div class='tarih'>".str_replace("-", "-",substr($user['eklenme_tarihi'], 0, 10))."
                        <a style='margin-left:40px;text-decoration:none;color:orange;font-weight:800;' class='editt' href='edit1.php?id=".$user["id"]."'>Edit</a>
                        <a style='margin-left:20px;text-decoration:none;color:red;font-weight:800;' href='delete1.php?id=".$user["id"]."'>Delete</a>

                        <div  class='view'>".$user['topTick']." views</div>
                        </div>
                    </div>";

            }
        ?>
        
    </table>
    
</body>
</html>