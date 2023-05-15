<?php
// Menghubungkan ke database
include 'config.php';

// Memeriksa koneksi
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

// Memeriksa apakah form dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mengambil data dari form
  $namaIbu        = $_POST['namaIbu'];
  $lahirIbu        = $_POST['lahirIbu'];
  $pendidikanIbu   = $_POST['pendidikanIbu'];
  $pekerjaanIbu    = $_POST['pekerjaanIbu'];
  $penghasilanIbu  = $_POST['penghasilanIbu'];
  $berkebutuhanIbu = $_POST['berkebutuhanIbu'];

  // Menyimpan data ke tabel datapribadi
  $sql = "INSERT INTO `tb_Ibu` (nama_Ibu, lahir_Ibu, pendidikan_Ibu, pekerjaan_Ibu, penghasilan_Ibu, berkebutuhan_Ibu) VALUES ('$namaIbu','$lahirIbu','$pendidikanIbu','$pekerjaanIbu','$penghasilanIbu','$berkebutuhanIbu')";

  if (mysqli_query($koneksi, $sql) === TRUE) {
    echo "Data berhasil disimpan";
  } else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
  }
}

// Menutup koneksi
$koneksi->close();
?>
