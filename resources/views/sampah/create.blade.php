<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mochammad Andika Dwi Firmansyah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <img src ="{{('img/BANK-SAMPAH-PNG.png')}}" style="width:50px;">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/trash">Data hapus</a>
                </li>
                <h2 class="float-left mt-2">Daftar Sampah</h2>
            </ul>
        </div>
    </nav>
<div class="container">
        <div class="row">  
    @if(Session::get('errors'))
        <p style="padding: 5px 10px; background: red; color: white; margin: 10px">{{ Session::get('errors') }}</p>
    @endif
    <form action="{{ route('send') }}" method="POST">
      @csrf
    <div class="container d-flex justify-content-center align-items-center position-relative position-absolute top-50 start-50 translate-middle">
            <div class="">  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">kepala keluarga</label>
    <input type="text" name="kepala_keluarga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No Rumah</label>
    <input type="text"  name="no_rumah" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Rt/Rw</label>
    <input type="text"  name="rt_rw" class="form-control"  id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">total karung sampah</label>
    <input type="number"  name="total_karung_sampah" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">tanggal pengangkutan</label>
    <input type="date"  name="tanggal_pengangkutan" class="form-control"  id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary" style="display: flex; float:right; " href="/" role="button">back</a>
</div>
</form>
   
</body>
</html>