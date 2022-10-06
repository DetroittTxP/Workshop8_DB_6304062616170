<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsertMember</title>
</head>
<body>
    <form action="Workshop8Insert.php" method="post">
        กรอก Username <input type="text" name="username" placeholder="username"><br>
        รหัสผ่าน <input type="password" name="password" placeholder="กรอกรหัสผ่าน"><br>
        ชื่อ-สกุล <input type="text" name="name" placeholder="กรอกชื่อ-สกุล"><br>
        ที่อยู่<br> <textarea name="address"cols="30" rows="4"></textarea><br>
        เบอร์โทร <input type="tel" name="mobile"><br>
        Email: <input type="email" name="email"><br>

        <input type="submit" value="สมัครสมาชิก">
    </form>
</body>
</html>