@extends('layouts.main')
@section('title', 'mahasiswa')
@section('content')
  <div class="card mt-4">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="/mahasiswa/simpan" method="POST">
            @csrf
            <div class="form-group w-25">
              <label>NIM</label>
              <input type="number" name="nim" class="form-control" placeholder="Masukan NIM">
            </div>

            <div class="form-group w-25">
              <label>Nama Mahasiswa</label>
              <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
            </div>

            <label>Gender</label>
            <div class="form-check w-25">
              <input type="radio" name="gender" value="Pria" class="form-check-input" checked>
              <label>Pria</label>
            </div>
            <div class="form-check w-25">
              <input type="radio" name="gender" value="Wanita" class="form-check-input">
              <label>Wanita</label>
            </div>

            <div class="form-group w-25">
                <label>Program Studi</label>
                <select name="prodi" class="form-control">
                    <option value="0">--Pilih Program Studi--</option>
                    <option value="0">Sistem Informasi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Psikolog">Psikolog</option>
                    <option value="Kedokteran">Kedokteran</option>
                </select>
            </div>

            <label>Minat</label>
            <div class="form-check ">
              <input type="checkbox" name="minat[]" value="ai" class="form-check-input">
              <label>Artificial Intelegent</label>
            </div>
            <div class="form-check ">
                <input type="checkbox" name="minat[]" value="web" class="form-check-input">
                <label>Web Engineering</label>
            </div>
            <div class="form-check ">
                <input type="checkbox" name="minat[]" value="data" class="form-check-input">
                <label>Data Engineering</label>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            {{-- @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif --}}
        </form>
    </div>
  </div>
@endsection