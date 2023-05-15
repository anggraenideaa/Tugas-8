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
  $namaAyah         = $_POST['namaAyah'];
  $lahirAyah        = $_POST['lahirAyah'];
  $pendidikanAyah   = $_POST['pendidikanAyah'];
  $pekerjaanAyah    = $_POST['pekerjaanAyah'];
  $penghasilanAyah  = $_POST['penghasilanAyah'];
  $berkebutuhanAyah = $_POST['berkebutuhanAyah'];

  // Menyimpan data ke tabel datapribadi
  $sql = "INSERT INTO `tb_ayah` (nama_ayah, lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, berkebutuhan_ayah) VALUES ('$namaAyah','$lahirAyah','$pendidikanAyah','$pekerjaanAyah','$penghasilanAyah','$berkebutuhanAyah')";

  if (mysqli_query($koneksi, $sql) === TRUE) {
    echo "Data berhasil disimpan";
  } else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
  }
}

// Menutup koneksi
$koneksi->close();
?>
