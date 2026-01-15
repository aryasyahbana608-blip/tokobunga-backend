<?php
session_start();

function check_login() {
    if (!isset($_SESSION['admin_logged_in'])) {
        header("Location: /admin/login.php");
        exit;
    }
}

function login($username, $password, $pdo) {
    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->execute([$username]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $admin['username'];
        return true;
    }
    return false;
}
?>
