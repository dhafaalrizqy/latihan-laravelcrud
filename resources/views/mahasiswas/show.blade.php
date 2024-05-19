@extends('mahasiswas.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">HALAMAN MAHASISWA</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $mahasiswas->nama }}</h5>
        <p class="card-text">Prodi : {{ $mahasiswas->prodi }}</p>
        <p class="card-text">npm : {{ $mahasiswas->npm}}</p>
  </div>
    </hr>
  </div>
</div>