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
    </div>
  </div>
</nav>
<div class="col-md-2" style="margin-top: 20px">
        <div class="form-group">
            <select name="id" id="id" class="form-control custom-control">
                <option value="">Select status</option>
                @foreach($rs as $r)
                    <option value="{{$r->id}}">{{$r->nama_rs}}</option>
                @endforeach
            </select>
        </div>
  </div>
  <br>
@include('Pasien.child')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
            
            $(document).ready(function(){

                $(document).on('click', '.relative', function(event){

                    let id = $('#id').children("option:selected").val();
  
                    if(id === undefined){
                        id = "";
                    }

                    event.preventDefault(); 
                    let page = $(this).attr('href').split('page=')[1];
                    history.pushState(null,null,'?page=' + page + '&id=' + id );
                    fetch_data(page);
                });

                function fetch_data(page)
                {
                    let _token = $("input[name=_token]").val();
                    let id = $('#id').children("option:selected").val();
  
                    if(id === undefined){
                        id = "";
                    }

                    $.ajax({
                        url:"pasien/?page=" + page + '&id=' + id,
                        method:"GET",
                        data:{_token:_token, page:page},
                        success:function(data){
                            $('.data').html(data);
                        }
                    });
                }

                $(document).on('change','#id',function(){
                    let id = $(this).val();
                    let page = 1;
                    history.pushState(null,null,'?page=' + page + '&id=' + id );
                    $.ajax({
                        url:"/?page=" + page + '&id=' + id,
                        method:"GET",
                        data:{id:id},
                        success:function(data){
                            $('.data').html(data);
                        }
                    });
                });

            });
            
        </script>
</body>
</html>