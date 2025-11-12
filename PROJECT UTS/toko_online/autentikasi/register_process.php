<?php
include 'koneksi.php';
session_start();

// Ambil koneksi
$koneksi = get_pg_connection();

// Pastikan form dikirim dengan benar
if (!isset($_POST['username'], $_POST['password'], $_POST['fullname'])) {
    header("Location: register.php?msg=incomplete");
    exit;
}

$username = $_POST['username'];
$fullname = $_POST['fullname'];

// Hash password agar aman
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Query INSERT dengan koneksi yang benar
$query = "INSERT INTO users (username, password, fullname) VALUES ($1, $2, $3)";
$result = pg_query_params($koneksi, $query, array($username, $password, $fullname));

if ($result) {
    header("Location: login.php?msg=registered");
    exit;
} else {
    echo "Pendaftaran gagal: " . pg_last_error($koneksi);
}
