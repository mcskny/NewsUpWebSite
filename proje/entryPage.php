<!DOCTYPE html>
<?php session_start();?>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Up - Giriş</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    

    <div class="entryPage1">
    <h1 class="htitle1">Giriş</h1>
    <form action="userDataControl.php" method="POST" id="entry" class="entry" name="entry" >
        <input type="text"  name="username" id="username" placeholder="Kullancı Adı" required="required" />
        <input type="password"  name="userpassword" id="userpassword" placeholder="Şifre" required="required" />
        <input type="submit" name="Submit" class= "Submit" id="Submit" value="Giriş" required="required"/>

    </form>
    <form action="userDataControl.php" method="POST" id="entry" class="entry" name="entry" required="required">
    
    </form>
    <form class="formm" action="addUser.php" style="height:100%;">
    <a  class="Submit1" href="addUser.php" >Yeni Hesap Oluştur</a>
    </form>
        
    
    </div>
    
    <?php
    include("connectDatabase.php");

    if(isset($_POST))
    {
        
        
        if($_SESSION["errmsg"]==true){
            ?>
                <h1>Hatalı Giriş Yaptınız.</h1>
            <?php
        }
            
        
        
        
    
        
    }
    ?>

</body>

</html>