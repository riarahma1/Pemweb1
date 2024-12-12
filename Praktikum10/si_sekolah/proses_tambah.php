<?php
include 'koneksi.php';

$nama_siswa = $_POST['nama_siswa'];
$alamat_siswa = $_POST['alamat_siswa'];
$agama_siswa = $_POST['agama_siswa'];
$asal_sekolah = $_POST['asal_sekolah'];

$query = "INSERT INTO data_siswa (nama_siswa, alamat_siswa, agama_siswa, asal_sekolah) 
          VALUES ('$nama_siswa', '$alamat_siswa', '$agama_siswa', '$asal_sekolah')";

if (mysqli_query($konek, $query)) {
    echo "<script>
            alert('Data siswa berhasil ditambahkan!');
            window.location.href='data_siswa.php';
          </script>";
} else {
    echo "<script>
            alert('Data siswa gagal ditambahkan!');
            window.location.href='tambah_siswa.php';
          </script>";
}

mysqli_close($konek);
?>