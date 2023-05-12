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
        <h1 class="htitle">Kayıt Ol</h1>
        <form name = "goforum" id = "goforum" action="confirmation.php" method = "POST">
            <input required style = "margin-top:35px"  type="text" name ="username" id = "username" placeholder = "Kullancı adı"">
            <input required type="password" required="required" name ="userpassword" id = "userpassword" placeholder = " Şifre">
            <input type="submit" class="Submit2" name = "Submit" id ="Submit" value = "Yeni Kullanıcı Oluştur" class ="btnstyle">
        </form>
    </div>

    
</body>
</html>