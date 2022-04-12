<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form method="post" action="{{route('pasien.update',$pasien->id)}}" class="form-control">
@method('PATCH')
@csrf
<h3>Tambah Pasien</h3>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" value="{{$pasien->nama}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" id="exexampleFormControlTextarea1ampleFormControlTextarea1" rows="3">{{$pasien->alamat}}</textarea>
  </div>
  <div class="mb-3">
    <select name="id" class="form-select" aria-label="Default select example">
        @foreach ($rs as $r)
            <option value="{{$r->id}}" @if($pasien->rumah_sakit_id == '{{$r->id}}') selected @endif>{{$r->nama_rs}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="no_telpon" class="form-label">Telepon</label>
    <input type="text" name="no_telpon" class="form-control" id="no_telpon" value="{{$pasien->no_telpon}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>