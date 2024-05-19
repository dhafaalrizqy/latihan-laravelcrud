@extends('mahasiswas.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('mahasiswa/' .$mahasiswas->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$mahasiswas->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="nama" id="nama" value="{{$mahasiswas->nama}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="prodi" id="prodi" value="{{$mahasiswas->prodi}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="npm" id="npm" value="{{$mahasiswas->npm}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop