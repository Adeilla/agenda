<?php
include 'koneksi.php';
$id = mysqli_query($config, "SELECT * FROM bukuagenda WHERE Agenda='$_GET[id]'");
$data = mysqli_fetch_assoc($id);

  $sql=mysqli_query($config,"DELETE from bukuagenda WHERE Agenda='$_GET[id]'");

  echo "<script>alert('delete successfully!');</script>";
  echo "<script>location='index.php?page=tampilan';</script>";
?>