<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Up - Kayıt Ol</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="entryPage">
        <h1 class="htitle">Sign Up</h1>
        <form name = "goforum" id = "goforum" action="confirmation.php" method = "POST">
            <input  required style = "margin-top:35px"  type="text" name ="username" id = "username" placeholder = "UserName">
            <input  style='margin-top:30px;' required type="password" required="required" name ="userpassword" id = "userpassword" placeholder = "Password">
            <input type="submit" class="Submit2" name = "Submit" id ="Submit" value = "Sign Up" class ="btnstyle">
        </form>
    </div>
    <a  class="Submit1" href="entryPage.php" >Sign In</a>
    <a  class="Submit4" href="/user-interface/user-main-page.php" >Contiune Without Sign</a>

    
</body>
</html>