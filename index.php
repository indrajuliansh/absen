<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $_SESSION['nama_pegawai']=$_POST['nama_pegawai'];
  $_SESSION['password']=$_POST['password'];
  header ('location:dashboard.php');
  exit();
}
include 'login_form.html'
?>