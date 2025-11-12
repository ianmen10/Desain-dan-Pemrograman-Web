<?php
include 'koneksi.php';
session_start();

// Ambil koneksi dari fungsi
$koneksi = get_pg_connection();

if (!isset($_POST['username'], $_POST['password'])) {
    header("Location: login.php");
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

// Gunakan pg_query_params dengan koneksi yang benar
$result = pg_query_params($koneksi, "SELECT * FROM users WHERE username=$1", array($username));

$user = pg_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    session_regenerate_id(true);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: dashboard.php");
    exit;
} else {
    header("Location: index.php?msg=failed");
    exit;
}
