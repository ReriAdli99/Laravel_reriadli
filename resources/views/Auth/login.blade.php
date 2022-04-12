<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form method="post" class="form-control" action="/postlogin">
    @csrf
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" name="username" class="form-control" id="staticEmail" placeholder="username">
            @if ($message = Session::get('gagal'))
				<div class="col-md-12">
					<div class="text-danger"> 
						<span>{{ $message }}</span>
					</div>
				</div>
			@endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" name="password" class="form-control"  placeholder="password" id="inputPassword">
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button class="btn btn-primary btn-rounded btn-login">Login</button>
			<a href="/register" type="button" class="btn btn-primary btn-rounded btn-login">Register</a>
		</div>
    </form>
</body>
</html>