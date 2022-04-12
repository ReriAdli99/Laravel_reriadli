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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">terakorp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/rs">Rumah Sakit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pasien">Pasien</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/logout">logout</a>
        </li>
      </ul>
      <form action="/pasien/cari" method="GET" class="d-flex">
        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="{{ old('seerch') }}">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<table class="table">
<thead>
    <tr>
        <th  scope="col">Rumah Sakit</th>
        <th  scope="col">Alamat</th>
        <th  scope="col">Email</th>
        <th  scope="col">Telepon</th>
    </tr>
</thead>
<tbody>
    @foreach($rs as $r)
    <tr id="rid{{$r->id}}">
        <td>{{$r->nama_rs}}</td>
        <td>{{$r->alamat}}</td>
        <td>{{$r->email}}</td>
        <td>{{$r->telepon}}</td>
        <td>
            <a href="{{route('rs.edit',$r->id)}}" class="btn btn-warning">edit</a>
            <div class="btn-group">
                <form action="{{route('rs.hapus',$r->id)}}" method="post" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                    @csrf
                    @method('DELETE')
                    <button style="width:100px" class="btn btn-danger" >Hapus</button>
                </form>
            </div> 
        </td>
    </tr>
    @endforeach
</tbody>
<a href="/rs/tambah" class="btn btn-primary">Tambah Rumah Sakit</a>
</table>
</body>
</html>