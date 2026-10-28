<?php
//MEMBUAT FUNGSI
//membuat function
// function salam(){
//     echo "<h3>Assalamualaikum, </h3>";
//     echo "Perkenalkan, nama saya Inez<br/>";
// }
 
//memanggil function
salam();

//FUNGSI DENGAN PARAMETER
//membuat function
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Inez<br/>";
}
 
function kenalan($nama,$asal) {
    echo "<h3>Halo Nama saya $nama </h3>";
    echo "Saya dari $asal <br>";
}
 
//memanggil function salam
salam();
 
$siswa="Inez";
$dari="Nganjuk";
 
//memanggil function kenalan
kenalan($siswa,$dari);

//FUNGSI YANG MENGAMBIL NILAI
// membuat fungsi hitung umur
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
  }
   
echo "Umur saya adalah ". hitungUmur(2006, 2026) ." tahun";

//FUNGSI YANG MEMANGGIL FUNGSI LAIN
//Memanggil fungsion salam
salam();

$siswa="Nadine";
$dari="Kediri";

//memanggil function kenalan
kenalan($siswa,$dari);
?>