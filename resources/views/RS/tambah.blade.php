<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form method="post" action="/postrs" class="form-control">
@csrf
<h3>Tambah Pasien</h3>
  <div class="mb-3">
    <label for="nama_rs" class="form-label">Nama Rumah Sakit</label>
    <input type="text" name="nama_rs" class="form-control" id="nama_rs">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" id="exexampleFormControlTextarea1ampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="telepon" class="form-label">Telepon</label>
    <input type="text" name="telepon" class="form-control" id="telepon">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>