{{-- <!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
  <body>
    <div class="container-fluid">
       <div class="row">
            <div class="col md-12 bg-primary py-2">
                <div class="dropdown float-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> User
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">
                        <div class="media">
                            <img class="align-self-center mr-3" src="https://rekreartive.com/wp-content/uploads/2018/11/Logo-UKDW-Universitas-Kristen-Duta-Wacana-Original.jpg" widht="50" height="70" alt="Generic placeholder image">
                            <div class="media-body">
                              <h5 class="mt-3">Eunike Larasati</h5>
                              </div>
                          </div>
                      </a>
                      <a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Setting</a>
                      <a class="dropdown-item" href="#"><i class="bi bi-power"></i> Logout</a>
                    </div>
                  </div>
            </div>
       </div>
       <div class="row vh-100">
            <div class="col-md-2 border">
                <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" href="/" aria-selected="true">Home</a>
                    <a class="nav-link" href="/profile" aria-selected="true">Profile</a>
                    <a class="nav-link" href="/mahasiswa" aria-selected="true">Mahasiswa</a>
                    <a class="nav-link" href="/contact" aria-selected="true">Contact</a>
                    
                  </div>
            </div>
            <div class="col-md-10">
                <div class="card text-left mt-4">

                    <div class="card-body">
                      <h5 class="card-title">Mahasiswa</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
            </div>
       </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  
</html> --}}
@extends('layouts.main')
@section('title', 'mahasiswa')
@section('content')
@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
  <div class="card mt-4">
      <div class="card-header">
        <a href="/mahasiswa/formtambah" class="btn btn-primary" role="button"><i class="bi bi-plus-square-fill"></i> Mahasiswa</a>
        <form action="/mahasiswa/pencarian" method="GET" class="form-inline my-2 my-lg-0 float-right">
          <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>

      <div class="card-body">
        @if(session('flashcreate'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('flashcreate') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if(session('flashupdate'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{{ session('flashupdate') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </div>
      @endif

      @if(session('flashdelete'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('flashdelete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    {{-- <a href="/mahasiswa/delete/" onclick="confirmDelete('{{ $m->id }}')" class="btn btn-danger"><i class="bi bi-x-square"></i></a> --}}
    {{-- <script>
      function confirmDelete(id){
        var confirmation = confirm("Apakah anda yakin ingin menghapus data ini?");
        if(confirmation){
          window.location.href = "/mahasiswa/delete" + id;
        }
      }
    </script> --}}
        
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Gender</th>
              <th scope="col">Program Studi</th>
              <th scope="col">Minat</th>
              <th scope="col">Aksi</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($mhs as $idx => $m)
              <tr>
                <th scope="row">{{ $mhs->firstItem() + $idx }}</th>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->gender }}</td>
                <td>{{ $m->prodi }}</td>
                <td>{{ $m->minat }}</td>
                <td>
                  <a href="mahasiswa/formedit/{{ $m->id }}" class="btn btn-success" role="button"><i class="bi bi-pencil-square"></i></a>
                  <a href="mahasiswa/delete/{{ $m->id }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                  {{-- <a href="/mahasiswa/delete/" onclick="confirmDelete('{{ $m->id }}')" class="btn btn-danger"><i class="bi bi-trash"></i></a> --}}
                </td>
              </tr>                
            @endforeach
          </tbody>
        </table>
        <span class='float-right'>{{ $mhs->links() }}</span>
        <b><p>Ini Halaman ke            : <span>{{ $mhs->currentPage() }}</span></p></b>
        <b><p>Total Data Halaman ini    : <span>{{ $mhs->count() }}</span></p></b>
        <b><p>Total Data Keseluruhan    : <span>{{ $mhs->total() }}</span></p></b>
      </div>
  </div>
@endsection