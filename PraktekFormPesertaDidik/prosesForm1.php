<?php
// Menghubungkan ke database (ganti dengan detail koneksi database Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cobaform";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

// Menyimpan data ke database
$sql = "INSERT INTO cobatabel (nama, email, telepon, alamat) VALUES ('$nama', '$email', '$telepon', '$alamat')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
