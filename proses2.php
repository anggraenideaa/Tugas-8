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
  $namaLengkap          = $_POST['namaLengkap'];
  $jk                   = $_POST['jk'];
  $nisn                 = $_POST['nisn'];
  $nik                  = $_POST['nik'];
  $tempatLahir          = $_POST['tempatLahir'];
  $tgl             = $_POST['tgl'];
  $agama                = $_POST['agama'];
  $berkebutuhanKhusus   = $_POST['berkebutuhanKhusus'];
  $alamat               = $_POST['alamat'];
  $rt                   = $_POST['rt'];
  $rw                   = $_POST['rw'];
  $dusun                = $_POST['dusun'];
  $desa                 = $_POST['desa'];
  $kecamatan            = $_POST['kecamatan'];
  $kodePos              = $_POST['kodePos'];
  $tempatTinggal        = $_POST['tempatTinggal'];
  $transportasi         = $_POST['transportasi'];
  $noHp                 = $_POST['noHp'];
  $noTelp               = $_POST['noTelp'];
  $email                = $_POST['email'];
  $kip                  = $_POST['kip'];
  $noKip                = $_POST['noKip'];
  $kwn                  = $_POST['kwn'];
  $namaNegara           = $_POST['namaNegara'];

  // Menyimpan data ke tabel datapribadi
  $sql = "INSERT INTO `tb_pribadi`(`nama_lengkap`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `agama`, `berkebutuhan`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kode_pos`, `tempat_tinggal`, `mode_transportasi`, `no_hp`, `no_telp`, `email`, `penerima_kip`, `no_kip`, `kewarganegaraan`, `nama_negara`) VALUES ('$namaLengkap','$jk', '$nisn', '$nik', '$tempatLahir', '$tgl', '$agama', '$berkebutuhanKhusus', '$alamat', '$rt', '$rw', '$dusun', '$desa', '$kecamatan', '$kodePos', '$tempatTinggal', '$transportasi', '$noHp', '$noTelp', '$email', '$kip', '$noKip', '$kwn', '$namaNegara')";

  if (mysqli_query($koneksi, $sql) === TRUE) {
    echo "Data berhasil disimpan";
  } else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
  }
}

// Menutup koneksi
$koneksi->close();
?>
