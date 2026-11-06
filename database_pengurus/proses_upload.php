<?php
// Koneksi ke database
require_once('koneksi.php');

// Ambil data dari form
$id_pengurus = $_POST['id_pengurus'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Masukkan data nama file dan id pengurus ke tabel tb_gambar
$query = "INSERT INTO tb_gambar VALUES ('', '$id_pengurus', '$foto')";
$simpan = mysqli_query($conn, $query);

// Pindahkan file fisik yang di-upload ke dalam folder "foto"
move_uploaded_file($tmp, "foto/" . $foto);
?>

<br>
<a href="upload_foto.php">Kembali Untuk Lihat Data</a>