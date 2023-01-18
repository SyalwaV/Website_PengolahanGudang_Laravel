@extends('layout.main')
@section('content')
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script>
</head>
<body>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
    @if(count($errors)>0)
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
   <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
   @endif
<br>
<form action="{{ url()->current() }}/simpan" method="post">
{{csrf_field()}}
<div class="form-group">
    <label>Kode Supplier</label>
    <input class="form-control" type="input" name="kode" value="{{old('kodesup')}}"><br>
</div>

<div class="form-group">
    <label>Nama Supplier</label>
    <input class="form-control" type="input" name="nama" value="{{old('namasup')}}"><br>
</div>

<div class="form-group">
    <label>Telpon Supplier</label>
    <input class="form-control"  type="input" name="telpon" value="{{old('telponsup')}}"><br>
</div>

<div class="form-group">
    <label>Keterangan</label>
    <input class="form-control" type="input" name="ket" value="{{old('keterangan')}}"><br>
</div>

<div class="form-group">
    <label>Alamat</label>
    <input class="form-control" type="input" name="almt" value="{{old('alamatsup')}}"><br>

<input type="submit" class="btn btn-primary" value="simpan">

</form>
</body>
</html>
@endsection