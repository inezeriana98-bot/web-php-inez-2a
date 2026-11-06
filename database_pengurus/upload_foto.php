<?php
// Koneksi ke database
require_once('koneksi.php');

// Ambil data gambar digabung dengan nama pengurus
$query = "SELECT tb_gambar.*, tb_pengurus.nama FROM tb_gambar JOIN tb_pengurus ON tb_gambar.id_pengurus = tb_pengurus.id";
$data = mysqli_query($conn, $query);
?>

<html>
    <head>
        <title>Upload File</title>
    </head>
    <body>
    <h1>Upload Foto Pengurus</h1>

    <!-- Tabel Kosong di Awal (Sesuai Contoh) -->
    <table border="2" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Pengurus</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
<?php
 while($row = mysqli_fetch_assoc($data)) {
?>
        <tr>
            <td><?php echo $row['id_gambar']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><img src="foto/<?php echo $row['gambar']; ?>" width="50px" height="50px"></td>
            <td>
                <a href="hapus_foto.php?id_gambar=<?php echo $row['id_gambar']; ?>">Hapus</a>
            </td>
        </tr>
<?php
 }
?>
    </table>

    <hr>

    <!-- Form Upload File -->
    <h1>Form Upload</h1>
    <form method="post" action="proses_upload.php" enctype="multipart/form-data">
        <p>Nama 
            <select name="id_pengurus">
<?php
// Menampilkan dropdown pilihan nama pengurus dari tabel tb_pengurus
$query_pengurus = "SELECT * FROM tb_pengurus";
$data_pengurus = mysqli_query($conn, $query_pengurus);
 while($row_pengurus = mysqli_fetch_assoc($data_pengurus)) {
?>
                <option value="<?php echo $row_pengurus['id']; ?>">
                    <?php echo $row_pengurus['nama']; ?>
                </option>
<?php
 }
?>
            </select>
        </p>
        <p>Foto <input type="file" name="foto"></p>
        <p>
            <button type="submit">Simpan</button>
            <button type="reset">Batal</button>
        </p>
    </form> 
</body>
</html>