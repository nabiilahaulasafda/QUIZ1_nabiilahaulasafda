<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container" >
    <div class="row mt-5">
      <div class="col-6 m-auto">
      <div class="card">
  <div class="card-header">
    <h3> Formulir Dosen </h3>
  </div>

  <div class="card-body">
  <form action="proses.php" method="POST"> 

  <div class="mb-3">
    <label class="form-label"> NIDN </label>
    <input type="text" name="nidn" class="form-control" id="">
  </div>

  <div class="mb-3">
    <label class="form-label"> Nama Lengkap </label>
    <input type="text" name="nama" class="form-control" id="">
  </div>

  <div class="mb-3">
    <label class="form-label"> Rumpun </label>
    <select name="rumpun" id="" class="form-select">
      <option value="Komputer"> Komputer </option>
      <option value="Akuntansi"> Akuntansi </option>
      <option value="Manajemen"> Manajemen </option>
      <option value="Perpajakan"> Perpajakan </option>
      <option value="Bisnis"> Bisnis </option>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label"> Tempat Lahir </label>
    <input type="text" name="tempat" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label"> Tanggal Lahir </label>
    <input type="date" name="tanggal" class="form-control">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
      </div>
    </div>
  </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    
</body>
</html>