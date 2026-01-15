<?php
require "../../includes/db.php";
require "../../includes/auth.php";
require "../../includes/functions.php";
check_login();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['name'], $_POST['price'], $_POST['description']]);
    redirect("index.php");
}
?>

<form method="POST">
    <h2>Tambah Produk</h2>
    <input name="name" placeholder="Nama" required><br><br>
    <input name="price" placeholder="Harga" required><br><br>
    <textarea name="description" placeholder="Deskripsi"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>
