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
    <label>Kode Barang</label>
    <input class="form-control" type="input" name="kode" value="{{old('kodebrg')}}"><br>
</div>
<div class="form-group">
    <label>Nama Barang</label>
    <input class="form-control" type="input" name="nama" value="{{old('namabrg')}}"><br>
</div>
<div class="form-group">
    <label>Satuan</label>
    <input class="form-control" type="input" name="satuan" value="{{old('satuan')}}"><br>
</div>
<div class="form-group">
    <label>Jumlah beli</label>
    <input class="form-control" type="input" name="beli" value="{{old('jumlah_beli')}}"><br>
</div>
<div class="form-group">
    <label>Jumlah jual</label>
    <input class="form-control" type="input" name="jual" value="{{old('jumlah_jual')}}"><br>
</div>
<br>
<input type="submit" value="simpan" class="btn btn-primary">

</form>
</body>
</html>
@endsection