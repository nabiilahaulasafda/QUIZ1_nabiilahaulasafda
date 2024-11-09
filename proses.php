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
    <link rel="stylesheet" href="css/bootstrap.css" >
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
                  <th scope="row"> NIDN </th>
                  <td>: <?= $nidn ?> </td>
                </tr>
                <tr>
                  <th scope="row"> Nama Lengkap </th>
                  <td>: <?= $nama ?> </td>
                </tr>
                <tr>
                  <th scope="row"> Rumpun </th>
                  <td>: <?= $rumpun ?> </td>
                </tr>
                <tr>
                  <th scope="row"> Tempat Lahir </th>
                  <td>: <?= $tempat ?> </td>
                </tr>
                <tr>
                  <th scope="row"> Tanggal Lahir </th>
                  <td>: <?= $tanggal ?> </td>
                </tr>
                <tr>
                  <th scope="row"> Email </th>
                  <td>: <?= $email ?> </td>
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