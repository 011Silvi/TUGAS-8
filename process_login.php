<?php
// Mendapatkan informasi login dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Koneksi ke database
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "datalengkap";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// Memeriksa informasi login dengan database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login berhasil
    echo "Login berhasil!";
    header("Location: registrasi.php");
    exit();
} else {
    // Login gagal
    echo "Login gagal!";
}

$conn->close();
?>








