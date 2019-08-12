@extends('layouts.main')

@section('title','About')

@section('container')
<div class="container">
<div class="row">
<div class="col-12">
    <h1 class="mt-3">Daftar Mahasiswa</h1>

    <table class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">#</th>
    <th scope="col">Nama</th>
    <th scope="col">NPM</th>
    <th scope="col">Email</th>
    <th scope="col">Jurusan</th>
    <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th scope="row">1</th>
    <td>Mochammad Fariz</td>
    <td>54416459</td>
    <td>mochammadfariz11@gmail.com</td>
    <td>Teknik Informatika</td>
    <td>
        <a href="" class="badge badge-pill badge-success">edit</a>
        <a href="" class="badge badge-pill badge-danger">delete</a>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
@endsection