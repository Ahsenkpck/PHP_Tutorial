<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>

    <form action="27.request.php?islem=ekle" method="POST" style="padding-left: 10px;">
    <input type="text" name="isim" placeholder="İsim"><br><br>
    <input type="email" name="e_posta" placeholder="E-Posta"><br><br>
    <input type="password" name="sifre" placeholder="Şifre"><br><br>
    <label for="">Diller</label><br>
    <label for="">PHP</label>
    <input type="checkbox" value="php" name="dil[]"><br>
    <label for="">NodeJS</label>
    <input type="checkbox" value="node" name="dil[]"><br>
    <label for="">JavaScript</label>
    <input type="checkbox" value="js" name="dil[]"><br>
    <button type="submit">Gönder</button>


    </form>
</body>

</html>