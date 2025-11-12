<?php
require_once 'koneksi.php';
session_start();

// Kalau form tidak kirim username/password, kembali ke halaman login.
if (!isset($_POST['username'], $_POST['password'])) {
    header("Location: login.php");
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

// Query user berdasarkan username
$sql = "SELECT id, username, password FROM users WHERE username = $1";
$result = qparams($sql, [$username]);

$user = pg_fetch_assoc($result);

// Cek password
if ($user && password_verify($password, $user['password'])) {
    session_regenerate_id(true);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    header("Location: dashboard.php");
    exit;
}

// Kalau gagal login
header("Location: login.php?msg=failed");
exit;
