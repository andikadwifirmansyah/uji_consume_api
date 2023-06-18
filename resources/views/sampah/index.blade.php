<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mochammad Andika Dwi Firmansyah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
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
                <h2 class="float-left mt-2">Daftar Sampah Masyarakat</h2>
            </ul>
        </div>
    </nav>
<div class="container">
        <div class="row">
            <div class="">
                <a class="btn btn-primary mt-4" style="display: flex; float:right; " href="/add" role="button">Tambah Data</a>
                <a href="{{ route('trash') }}" class="btn btn-primary mt-4">Lihat Data Terhapus</a>
            </div>
    </form>
    <br>
    @if (Session::get('success'))
        <p style="padding: 5px 10px; background: green; color: white; margin: 10px">{{ Session::get('success') }}</p>
    @endif
    <table class="table table-striped table-hover">
    <thead>
    <tr>
    <th class="text-center">No</th>
    <th class="text-center">kepala keluarga</th>
    <th class="text-center">No Rumah</th>
    <th class="text-center">RT/RW</th>
    <th class="text-center">Total</th>
    <th class="text-center">Kriteria</th>
    <th class="text-center">Tanggal</th>
    <th class="text-center">Action</th>
    </tr>
    </thead>
        @php
            $no = 1;
        @endphp

        <tbody>
        @foreach ($sampahs as $trash)
        <tr>
        <ol>
            <td class="text-center">{{$loop->iteration}}</td>
            <td class="text-center">{{ $trash['kepala_keluarga'] }}</td>
            <td class="text-center">{{ $trash['no_rumah'] }}</td>
            <td class="text-center">{{ $trash['rt_rw'] }}</td>
            <td class="text-center">{{ $trash['total_karung_sampah'] }}</i>
            <td class="text-center">{{ $trash['kriteria'] }}</i>
            <td class="text-center">{{ $trash['tanggal_pengangkutan'] }}</i>    
                <form action="{{ route('delete', $trash['id']) }}" method="POST">
                <td class="text-center">
                    <a href="{{ route('edit', $trash['id']) }}" class="btn btn-warning btn-sm"><i class="bi bi-recycle"></i> edit</a>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
                    @csrf
                    @method('DELETE')
                </form>
            </td>
            </ol>
</tr>
        @endforeach
        </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
         integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>