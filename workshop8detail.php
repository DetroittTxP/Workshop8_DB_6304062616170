<!DOCTYPE html>
<html lang="en">
<?php include "../connect.php" ?>    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindingWorkshop5</title>
</head>
<body>
    <?php
        $ken = $pdo->prepare("SELECT * from member WHERE username=?");
        $ken->bindparam(1,$_GET["username"]);
        $ken->execute();
        $row = $ken->fetch();
    ?>

            <h1>เพิ่มสมาชิกเรียบร้อย</h1>

            ชื่อสมาชิก: <?=$row["name"]?><br>
            ที่อยู่: <?=$row["address"]?><br>
            Email: <?=$row["email"]?><br>
            เบอร์โทร: <?=$row["mobile"]?><br>

    
</body>
</html>