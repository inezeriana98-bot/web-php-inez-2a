<?php
// membuat array kosong
$siswa = array();
$kelas = [];
 
// membuat array sekaligus mengisinya
$siswa = array("Ani", "Anton", "Sigit");
$kelas = [10, 11, 12];
 
// membuat array dengan mengisi indeks tertentu
$siswa[0] = "Inez";
$siswa[1] = "Nadine";
$siswa[2] = "Titania";
 
var_dump($siswa);
echo "<br>";
var_dump($kelas);
 
?>