<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<p class="fw-medium text-center fs-3">Update data</p>
<div class="container">
<hr>
<?php
$agenda = mysqli_query($config, "select * from bukuagenda where Agenda='$_GET[id]'");
$data = mysqli_fetch_assoc($agenda);
?>
<form method="post" enctype="multipart/form-data">
    <div class="form-group mt-3">
        <label>hari</label>
        <input type="text" class="form-control" name="hr" value="<?php echo $data['Hari']?>">
    </div>
    <div class="form-group mt-3">
        <label>tanggal</label>
        <input type="date" class="form-control" name="dt" value="<?php echo $data['Tanggal']?>">
    </div>
    <div class="form-group mt-3" >
        <label>waktu</label>
        <input type="time" class="form-control" name="wt" value="<?php echo $data['Waktu']?>">
    </div>
    <div class="form-group mt-3">
        <label>lokasi</label>
        <input type="text" class="form-control" name="lks" value="<?php echo $data['Lokasi']?>">
    </div>
    <div class="form-group mt-3">
        <label>agenda</label>
        <textarea class="form-control" rows="3" name="agd"><?php echo $data['Agenda']?></textarea>
    </div>
    <button class="btn btn-success mt-3" name="up">Update</button>
</from>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
<?php
if (isset($_POST['up'])) {

$sql=mysqli_query($config,"update bukuagenda set Hari='$_POST[hr]',Tanggal='$_POST[dt]',
Waktu='$_POST[wt]',Lokasi='$_POST[lks]',Agenda='$_POST[agd]' WHERE Agenda='$_GET[id]'");

echo "<script>alert('update successfully');</script>";
echo "<script>location='index.php?halaman=tampilan';</script>";
}
?>