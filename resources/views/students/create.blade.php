@extends('layouts.main')

@section('title','Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
<div class="row">
<div class="col-8">
    <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

      <form method = "post" action="/students">
      @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" placeholder="Masukkan Nama" value="{{old('nama')}}">
            @error('nama')
                <div class="invalid-feedback" > {{$message}}</div>
            @enderror
        </div>
       <div class="form-group">
            <label for="nrp">Nrp</label>
            <input name="nrp" type="text" class="form-control  @error('nrp')is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" value="{{old('nrp')}}">
            @error('nrp')
                <div class="invalid-feedback" > {{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="text" class="form-control" id="email" placeholder="Masukkan Email" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input name="jurusan" type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" value="{{old('jurusan')}}">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
   
    </div>
    </div>
    </div>
@endsection