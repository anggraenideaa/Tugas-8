<?php
include 'config.php';

$regis = mysqli_query($koneksi, "SELECT * FROM tb_registrasi");

foreach ($regis as $row) {
    echo "<h2>FORMULIR PESERTA DIDIK</h2>";
    echo "<h5>REGISTRASI PESERTA DIDIK</h5>";
    echo "<table>";
    echo "<tr><td>1. Jenis Pendaftaram</td><td>:</td><td>".$row['jenis_pendaftaran']."</td></tr>";
    echo "<tr><td>2. Tanggal Masuk Sekolah</td><td>:</td><td>".$row['tgl_masuk']."</td></tr>";
    echo "<tr><td>3. NIS</td><td>:</td><td>".$row['nis']."</td></tr>";
    echo "<tr><td>4. Nomor Peserta Ujian</td><td>:</td><td>".$row['no_peserta']."</td></tr>";
    echo "<tr><td>5. Apakah pernah PAUD</td><td>:</td><td>".$row['paud']."</td></tr>";
    echo "<tr><td>6. Apakah pernah TK</td><td>:</td><td>".$row['tk']."</td></tr>";
    echo "<tr><td>7. No. Seri SKHUN Sebelumnya</td><td>:</td><td>".$row['no_skhun']."</td></tr>";
    echo "<tr><td>8. No seri Ijazah Sebelumnya</td><td>:</td><td>".$row['no_ijazah']."</td></tr>";
    echo "<tr><td>9. Hobi</td><td>:</td><td>".$row['hobi']."</td></tr>";
    echo "<tr><td>10. Cita-cita</td><td>:</td><td>".$row['cita_cita']."</td></tr>";
    echo "</table>";
} 


$pribadi = mysqli_query($koneksi, "SELECT * FROM tb_pribadi");

    foreach ($pribadi as $row) {
        echo "<h5>DATA PRIBADI</h5>";
        echo "<table>";
        echo "<tr><td>11. Nama Lengkap</td><td>:</td><td>".$row['nama_lengkap']."</td></tr>";
        echo "<tr><td>12. Jenis Kelamin</td><td>:</td><td>".$row['jenis_kelamin']."</td></tr>";
        echo "<tr><td>13. NISN</td><td>:</td><td>".$row['nisn']."</td></tr>";
        echo "<tr><td>14. NIK</td><td>:</td><td>".$row['nik']."</td></tr>";
        echo "<tr><td>15. Tempat Lahir</td><td>:</td><td>".$row['tempat_lahir']."</td></tr>";
        echo "<tr><td>16. Tanggal Lahir</td><td>:</td><td>".$row['tanggal_lahir']."</td></tr>";
        echo "<tr><td>17. Agama</td><td>:</td><td>".$row['agama']."</td></tr>";
        echo "<tr><td>18. Berkebutuhan Khusus</td><td>:</td><td>".$row['berkebutuhan']."</td></tr>";
        echo "<tr><td>19. Alamat Jalan</td><td>:</td><td>".$row['alamat']."</td></tr>";
        echo "<tr><td>20. RT</td><td>:</td><td>".$row['rt']."</td></tr>";
        echo "<tr><td>21. RW</td><td>:</td><td>".$row['rw']."</td></tr>";
        echo "<tr><td>22. Nama Dusun</td><td>:</td><td>".$row['dusun']."</td></tr>";
        echo "<tr><td>23. Nama Kelurahan/Desa</td><td>:</td><td>".$row['desa']."</td></tr>";
        echo "<tr><td>24. Kecamatan</td><td>:</td><td>".$row['kecamatan']."</td></tr>";
        echo "<tr><td>25. Kode Pos</td><td>:</td><td>".$row['kode_pos']."</td></tr>";
        echo "<tr><td>26. Tempat Tinggal</td><td>:</td><td>".$row['tempat_tinggal']."</td></tr>";
        echo "<tr><td>27. Moda Transportasi</td><td>:</td><td>".$row['mode_transportasi']."</td></tr>";
        echo "<tr><td>28. Nomor HP</td><td>:</td><td>".$row['no_hp']."</td></tr>";
        echo "<tr><td>29. Nomor Telepon</td><td>:</td><td>".$row['no_telp']."</td></tr>";
        echo "<tr><td>30. Email Pribadi</td><td>:</td><td>".$row['email']."</td></tr>";
        echo "<tr><td>31. Penerima KPS/PKH/KIP</td><td>:</td><td>".$row['penerima_kip']."</td></tr>";
        echo "<tr><td>32. No.KPS/KKS/PKH/KIP</td><td>:</td><td>".$row['no_kip']."</td></tr>";
        echo "<tr><td>33. Kewarganegaraan</td><td>:</td><td>".$row['kewarganegaraan']."</td></tr>";
        echo "<tr><td>34. Nama Negara</td><td>:</td><td>".$row['nama_negara']."</td></tr>";
        echo "</table>";
    }
 
    $ayah = mysqli_query($koneksi, "SELECT * FROM tb_ayah");

    foreach ($ayah as $row) {
         echo "<h5>DATA AYAH KANDUNG</h5>";
        echo "<table>";
        echo "<tr><td>34. Nama Ayah Kandung</td><td>:</td><td>".$row['nama_ayah']."</td></tr>";
        echo "<tr><td>35. Tahun lahir</td><td>:</td><td>".$row['lahir_ayah']."</td></tr>";
        echo "<tr><td>36. Pendidikan</td><td>:</td><td>".$row['pendidikan_ayah']."</td></tr>";
        echo "<tr><td>37. Pekerjaan</td><td>:</td><td>".$row['pekerjaan_ayah']."</td></tr>";
        echo "<tr><td>38. Penghasilan</td><td>:</td><td>".$row['penghasilan_ayah']."</td></tr>";
        echo "<tr><td>39. Berkebutuhan Khusus</td><td>:</td><td>".$row['berkebutuhan_ayah']."</td></tr>";
        echo "</table>";
    }


    $ibu = mysqli_query($koneksi, "SELECT * FROM tb_ibu");

    foreach ($ibu as $row) {
        echo "<h5>DATA IBU KANDUNG</h5>";
        echo "<table>";
        echo "<tr><td>34. Nama IBU Kandung</td><td>:</td><td>".$row['nama_ibu']."</td></tr>";
        echo "<tr><td>35. Tahun lahir</td><td>:</td><td>".$row['lahir_ibu']."</td></tr>";
        echo "<tr><td>36. Pendidikan</td><td>:</td><td>".$row['pendidikan_ibu']."</td></tr>";
        echo "<tr><td>37. Pekerjaan</td><td>:</td><td>".$row['pekerjaan_ibu']."</td></tr>";
        echo "<tr><td>38. Penghasilan</td><td>:</td><td>".$row['penghasilan_ibu']."</td></tr>";
        echo "<tr><td>39. Berkebutuhan Khusus</td><td>:</td><td>".$row['berkebutuhan_ibu']."</td></tr>";
        echo "</table>";
    }
?>