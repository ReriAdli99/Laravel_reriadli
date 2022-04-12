<table class="table">
<thead>
    <tr>
        <th  scope="col">Nama</th>
        <th  scope="col">Alamat</th>
        <th  scope="col">Rumah Sakit</th>
        <th  scope="col">Telepon</th>
    </tr>
</thead>
<tbody>
    @foreach($pasien as $p)
        <td>{{$p->nama}}</td>
        <td>{{$p->alamat}}</td>
        <td>{{$p->RumahSakit->nama_rs}}</td>
        <td>{{$p->no_telpon}}</td>
        <td>
            <a href="{{route('pasien.edit',$p->id)}}" class="btn btn-warning">edit</a>
            <div class="btn-group">
                <form action="{{route('pasien.hapus',$p->id)}}" method="post" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                    @csrf
                    @method('DELETE')
                    <button style="width:100px" class="btn btn-danger" >Hapus</button>
                </form>
            </div> 
        </td>
    </tr>
    @endforeach
</tbody>
<a href="/pasien/tambah" class="btn btn-primary">Tambah Pasien</a>
</table>
