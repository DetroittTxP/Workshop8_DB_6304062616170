<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iNSERTERWK7</title>
</head>
<?php include "connect.php"?>

<?php 
    $InS = $pdo->prepare("INSERT INTO member VALUE(?,?,?,?,?,?)");
    $InS->bindParam(1,$_POST["username"]);
    $InS->bindParam(2,$_POST["password"]);
    $InS->bindParam(3,$_POST["name"]);
    $InS->bindParam(4,$_POST["address"]);
    $InS->bindParam(5,$_POST["mobile"]);
    $InS->bindParam(6,$_POST["email"]);
    
    $InS->execute();

    $username = $_POST["username"];

    header("location:workshop8detail.php?username=" . $username);

    
    
?>
<body>
</body>
</html>