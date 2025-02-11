<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  </head>
  <body>
    <p class="fw-medium text-center fs-3">Buku Agenda</p>
    <div class="container">
      <hr>
      <a href="index.php?page=add" class="btn btn-secondary"><i class="fa-solid fa-plus"></i></a>
      <table class="table table-success table-striped mt-3 text-center">
        <thead>
          <tr>
            <th class="fw-medium">No</th>
            <th class="fw-medium">Hari</th>
            <th class="fw-medium">Tanggal</th>
            <th class="fw-medium">Waktu</th>
            <th class="fw-medium">Lokasi</th>
            <th class="fw-medium">Agenda</th>
            <th class="fw-medium">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Koneksi ke database melalui koneksi.php
            include "koneksi.php";

            $sql = mysqli_query($config, "SELECT * FROM bukuagenda");
            $nomor = 1;
            while ($data = mysqli_fetch_array($sql)) {
          ?>
          <tr>
            <td class="align-middle"><?php echo $nomor; ?></td>
            <td class="align-middle"><?php echo $data['Hari']; ?></td>
            <td class="align-middle"><?php echo $data['Tanggal']; ?></td>
            <td class="align-middle"><?php echo $data['Waktu']; ?></td>
            <td class="align-middle"><?php echo $data['Lokasi']; ?></td>
            <td class="align-middle"><?php echo $data['Agenda']; ?></td>
            <td class="align-middle">
              <a href="index.php?page=update&id=<?php echo $data['Agenda'];?>" class="btn btn-success btn-sm mr-2">
              <i class="fa-solid fa-pencil"></i></a>
              <a href="index.php?page=delete&id=<?php echo $data['Agenda']; ?>" 
              onclick="return confirm('are you sure?')" class="btn btn-light btn-sm mr-2"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
          <?php
              $nomor++;
            }
          ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>
