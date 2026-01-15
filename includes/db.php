<?php
$host = "localhost";
$port = "5432";
$dbname = "db_tokobunga";
$user = "postgres"; 
$pass = "12345";

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Database connection error: " . $e->getMessage());
}
?>
