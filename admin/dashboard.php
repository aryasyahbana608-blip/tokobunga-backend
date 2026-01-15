<?php
require "../includes/auth.php";
check_login();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Selamat datang, Admin!</h2>

<ul>
    <li><a href="products/index.php">Kelola Produk</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>
