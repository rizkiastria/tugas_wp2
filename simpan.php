<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nik            = $_POST['nik'];
$nama           = $_POST['nama'];
$divisi        = $_POST['divisi'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
$agama			= $_POST['agama'];
$status			= $_POST['status'];
$no_tlp			= $_POST['no_tlp'];
$foto           = $_FILES['foto']['name'];


// query SQL untuk insert data
$query= "INSERT INTO tb_karyawan SET nik='$nik',nama='$nama',jenis_kelamin='$jenis_kelamin',divisi='$divisi',alamat='$alamat',agama='$agama',
		status='$status',no_tlp='$no_tlp',foto='$foto'";  

mysqli_query($koneksi, $query);
// mengalihkan ke halaman tambah.php
header("location:tampil.php");
?>