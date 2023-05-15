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
  $jenisPendaftaran = $_POST['jenisPendaftaran'];
  $tglMasuk = $_POST['tglMasuk'];
  $nis = $_POST['nis'];
  $noPeserta = $_POST['noPeserta'];
  $paud = $_POST['paud'];
  $tk = $_POST['tk'];
  $noSkhun = $_POST['noSkhun'];
  $noIjazah = $_POST['noIjazah'];
  $hobi = $_POST['hobi'];
  $cita = $_POST['cita'];

  // Menyimpan data ke tabel datapribadi
  $sql = "INSERT INTO tb_registrasi (jenisPendaftaran, tgl_masuk, nis, no_peserta, paud, tk, no_skhun, no_ijazah, hobi, cita_cita) VALUES ('$jenisPendaftaran', '$tglMasuk', '$nis', '$noPeserta', '$paud', '$tk', '$noSkhun', '$noIjazah', '$hobi', '$cita')";

  if (mysqli_query($koneksi, $sql) === TRUE) {
    echo "Data berhasil disimpan";
  } else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
  }
}

// Menutup koneksi
$koneksi->close();
?>

