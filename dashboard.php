<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
   <center> <h1>Welcome to CryptoBank</h1>
   
    <p><a href="logout.php">Logout</a></p></center>

</body>
</html>
