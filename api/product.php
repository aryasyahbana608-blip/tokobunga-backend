<?php
require "../includes/db.php";

header("Content-Type: application/json");

$stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>
