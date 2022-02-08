<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah foto</title>
    <link rel="stylesheet" href="{{ asset('bootstrap') }}/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="
    margin-top:10vh;
    ">
    <h4>Tambah Foto</h4>
    <div class="card" style="
    border-radius:10px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 2px 10px;
    ">
        <div class="card-body">
            <input type="file" class="form-control" name="image"/>
            <button class="btn btn-primary mt-3">Submit</button>
        </div>
    </div>
    </div>
</body>
</html>