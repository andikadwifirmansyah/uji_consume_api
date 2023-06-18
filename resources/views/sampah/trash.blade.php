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
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <h2 class="float-left">Daftar Sampah</h2>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="my-4 col-12">
            </div>            
            <table class="table table-striped table-hover">
                <tr>
                   <th class="text-center">No</th>
                    <th class="text-center">kepala_keluarga</th>
                    <th class="text-center">no rumah</th>
                    <th class="text-center">rt/rw</th>
                    <th class="text-center">total karung sampah</th>
                    <th class="text-center">kriteria</th>
                    <th class="text-center">Tanggal pengangkutan</th>
                    <th class="text-center">Action</th>
                </tr>

                @php
                    $no = 1;
                @endphp

                @foreach ($sampahsTrash as $show)
                <tr class="text-center">
                    <td>{{$no++}}</td>
                    <td>{{ $show['kepala_keluarga'] }}</td>
                    <td>{{ $show['no_rumah'] }}</td>
                    <td>{{ $show['rt_rw'] }}</td>
                    <td>{{ $show['total_karung_sampah'] }}</td>
                    <td>{{ $show['kriteria'] }}</td>
                    <td>{{ $show['tanggal_pengangkutan'] }}</td>
                        <td style="display: flex" class="text-center">
                            <a href="{{ route('restore', $show['id']) }}"
                                style="float: left; margin-right:5px;"  class="btn btn-primary btn-sm"><i class="bi bi-arrow-clockwise"></i></a>

                                <a href="{{route('permanent',$show['id'])}}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>

                </tr>
                @endforeach
                    
            </table>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
         integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>