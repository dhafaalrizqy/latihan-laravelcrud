@extends('mahasiswas.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Buat Mahasiswa Baru</div>
  <div class="card-body">
       
      <form action="{{ url('mahasiswa') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Prodi</label></br>
        <input type="text" name="prodi" id="prodi" class="form-control"></br>
        <label>Npm</label></br>
        <input type="text" name="npm" id="npm" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop