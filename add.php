<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<p class="fw-medium text-center fs-3">Tambah agenda</p>
<div class="container">
<hr>
<form method="post" enctype="multipart/form-data">
    <div class="form-group mt-3">
        <label class="fw-bolder">hari</label>
        <input type="text" class="form-control" name="hr">
    </div>
    <div class="form-group mt-3">
        <label class="fw-bolder">tanggal</label>
        <input type="date" class="form-control" name="dt">
    </div>
    <div class="form-group mt-3">
        <label class="fw-bolder">waktu</label>
        <input type="time" class="form-control" name="wt">
    </div>
    <div class="form-group mt-3">
        <label class="fw-bolder">lokasi</label>
        <input type="text" class="form-control" name="lks">
    </div>
    <div class="form-group mt-3">
        <label class="fw-bolder">agenda</label>
        <textarea class="form-control" rows="3" name="agd"></textarea>
    </div>
    <button class="btn btn-secondary mt-3" name="tambah">add</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
<?php
include 'koneksi.php';

if (isset($_POST['tambah'])){
    $hari=$_POST['hr'];
    $tanggal=$_POST['dt'];
    $jam=$_POST['wt'];
    $lokasi=$_POST['lks'];
    $agenda=$_POST['agd'];

    $sql = mysqli_query($config, "INSERT INTO bukuagenda(Hari, Tanggal, Waktu, Lokasi, Agenda)
    VALUES ('$hari','$tanggal','$jam','$lokasi','$agenda')");

    echo "<script>alert('add successfully!');</script>";
    echo "<script>location='index.php?page=tampilan';</script>";
}
?>
