<?php
include "pengaturan/koneksi.php";
include "fungsi/fungsi.php";
session_start(); //memulai membaca sesi
unset($_SESSION['nama_lengkap']); //menghapus nilai sesi yang diregistrasi
unset($_SESSION['login']); //menghapus nilai sesi yang diregistrasi
unset($_SESSION['loginadmin']);
unset($_SESSION['id_admin']);
session_destroy(); //menghancurkan sesi
msgbox ("Berhasil Logout","proses_login.php") //mendirect ke index.php

?>