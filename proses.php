<?php

include("koneksi.php") ;

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$rumpun = $_POST['rumpun'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$email = $_POST['email'];

$simpan = "INSERT INTO dosen (nidn, nama, rumpun, tempat, tanggal, email) VALUES ('$nidn','$nama','$rumpun','$tempat','$tanggal','$email')" ;

mysqli_query($koneksi, $simpan);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
      <div class="col-6 m-auto">
        <div class="card">
          <div class="card-header">
            <h3> Formulir Dosen </h3>
          </div>

          <div class="card-body">
            <table class="table">

              <tbody>
                <tr>
                  <td scope="row"> NIDN </td>
                  <th>: <?= $nidn ?> </th>
                </tr>
                <tr>
                  <td scope="row"> Nama Lengkap </td>
                  <th>: <?= $nama ?> </th>
                </tr>
                <tr>
                  <td scope="row"> Rumpun </td>
                  <th>: <?= $rumpun ?> </th>
                </tr>
                <tr>
                  <td scope="row"> Tempat Lahir </td>
                  <th>: <?= $tempat ?> </th>
                </tr>
                <tr>
                  <td scope="row"> Tanggal Lahir </td>
                  <th>: <?= $tanggal ?> </th>
                </tr>
                <tr>
                  <td scope="row"> Email </td>
                  <th>: <?= $agama ?> </th>
                </tr>

              </tbody>

            </table>
            <a href="index.php" class="btn btn-warning btn-sm"> Back </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
</body>
</html>