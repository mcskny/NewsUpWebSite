<?php 
    include("connectDatabase.php");
    session_start();
    if(isset($_POST))
    {
        echo"if koşulu sağlandı";
        $name = trim($_POST['username']);
        $pasword = trim($_POST['userpassword']);
        $command = $connetion->prepare("INSERT INTO user_data set user_name = ?, user_password = ?");
        $insert =$command->execute(array($name,$pasword));
        if($insert)
        {
            $_SESSION['usname'] = $name;
            $_SESSION["errmsg"]=false;
            header("Location:entryPage.php");
        }
        else
        {
                echo("Eklenemedi :/");
        }
        
        
    }
?>