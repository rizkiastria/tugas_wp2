<?php

ob_start(); //output buffering = untuk menyimpan sementara outputan
session_start(); //memulai seseion, dolar itu variabel

$email = $_POST['email'];
$password = $_POST['password'];

if ($email=="admin@gmail.com" AND $password=="admin") 
{
  $_SESSION['email']=$email; //membuat session
  header("location:home.php"); //direct ke halaman home_admin.php jika sesuai dengan kondisi
}
  else {
     header("location:index.php?"); //direct ke halaman index.php jika tidak sesuai dengan kondisi
       }

?>