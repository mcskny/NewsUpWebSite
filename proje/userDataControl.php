<!DOCTYPE html>
<?php session_start();?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Up </title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>
<body>

<?php 
    include("connectDatabase.php");

    if(isset($_POST))
    {
        
        $name = trim($_POST['username']);
        $pasword = trim($_POST['userpassword']);
        $com = $connetion->prepare('SELECT * FROM user_data');
        $com->execute();
        while($datas = $com->fetch(PDO::FETCH_ASSOC)){
            if($datas['user_name'] == $name && $datas['user_password'] == $pasword)
            {
                $errmsg=false;
                $_SESSION["usernamee"] = $datas['user_name'];
                header("Location: mainPage.php");
                
            }
            else{
                $_SESSION["errmsg"]=true;
                header("Location: entryPage.php");
                break;
            }
        }
    }
?>
    
    </body>
</html>