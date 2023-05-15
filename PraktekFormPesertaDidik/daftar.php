<?php
// Membuat koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginphp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// menyimpan data kedalam variabel
$user            = $_POST['username'];
$sandi           = $_POST['sandi'];

// query SQL untuk insert data
$query="INSERT INTO datalogin SET username='$user',password='$sandi'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:redirect.php");
?>
