<?php
require "../../includes/db.php";
require "../../includes/auth.php";
check_login();

$stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Produk</title>
</head>
<body>

<h2>Daftar Produk</h2>
<a href="add.php">Tambah Produk</a><br><br>

<table border="1" cellpadding="6">
<tr>
    <th>ID</th><th>Nama</th><th>Harga</th><th>Aksi</th>
</tr>

<?php foreach ($products as $p): ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= esc($p['name']) ?></td>
    <td><?= $p['price'] ?></td>
    <td>
        <a href="edit.php?id=<?= $p['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $p['id'] ?>" onclick="return confirm('Hapus produk?')">Delete</a>
    </td>
</tr>
<?php endforeach; ?>

</table>
</body>
</html>
