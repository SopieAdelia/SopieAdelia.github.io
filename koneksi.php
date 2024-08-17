<?php
// deklarasikan variabel untuk menyimpan detail koneksi database
$servername = "localhost"; // nama host
$username = "root"; // nama user database
$password = ""; // password user database
$dbname = "contact_form_db"; // nama database yang dibuat

// koneksi dengan database
$conn = new mysqli($servername, $username, $password, $dbname);

//memeriksa koneksi 
if($conn->connect_error){
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$name = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// SQL untuk memasukkan data
$sql = "INSERT INTO kontak (Nama, Email, Pesan) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Catatan baru berhasil dibuat";
} else {
    echo "gagal: " . $sql . "<br>" . $conn->error;
}

//menutup koneksi
$conn->close();
?>