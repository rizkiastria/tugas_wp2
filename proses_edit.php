<?php 
include "koneksi.php";
$nik            = $_POST['nik'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$divisi         = $_POST['divisi'];
$alamat         = $_POST['alamat'];
$agama          = $_POST['agama'];
$status         = $_POST['status'];
$no_tlp         = $_POST['no_tlp'];
$foto			= $_FILE['foto'];


$query="UPDATE tb_karyawan  SET nik='$nik',nama='$nama',jenis_kelamin='$jenis_kelamin',divisi='$divisi',alamat='$alamat',no_tlp='$no_tlp',agama='$agama',status='$status',foto='$foto'";
mysqli_query($koneksi, $query);

header("location:tampil.php");

?>