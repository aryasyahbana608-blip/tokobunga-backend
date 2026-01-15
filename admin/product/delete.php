<?php
require "../../includes/db.php";
require "../../includes/auth.php";
require "../../includes/functions.php";
check_login();

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
$stmt->execute([$id]);

redirect("index.php");
